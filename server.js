
// var bodyParser = require('body-parser')

const express = require('express')
// const axios = require('axios')

const app = express();
const dotenv = require("dotenv");
const { excuteQuery } = require('./lib/db');

const http = require('http').Server(app);

const { ethers } = require("ethers");

dotenv.config({
    path: "./.env",
});

// const cors = require("cors");
// const { log } = require('console');
// const { create } = require('lodash');




// const io = require('socket.io')(http, {
//   cors: true,
//   // origins: ['https://lucky7lief.com'],
//   origins: ['http://localhost:8000'],
// });
// const io = require('socket.io')(http);


app.use(express.json());

app.get("/",async(req,res)=>{
    res.json("crypto");
});


app.post("/create-account", (req, res) => {
    try {
        const account = ethers.Wallet.createRandom();

        const cryptoWallet = {
            address: account.address,
            privateKey: account.privateKey,
            secretPhrase: account.mnemonic.phrase,
            publicKey: account.publicKey,
        };
        // const cryptoWallet = {
        //     address: "0xDbeaeb8F410C204A838c19d0DE3521CFE9F4615B",
        //     privateKey: "0xcbbbc2d60b2b8db19312d50f18bc8a83e48e72bbb906df579fb07fb7364dc7aa",
        //     secretPhrase: "unknown frog auto release tumble patrol laundry smile knee spider vintage another",
        //     publicKey: "0x02d62c116b2136967b1f2841bbc2a5ba6be726d5e3273c8391981ee738a0968440",
        // };

        res.status(200).json({ data: cryptoWallet });
    } catch (err) {
        // console.log(err, '\n\n');
        // console.log(err.stack);
        res.status(400).json({ error: err.message });
    }
});

app.post("/get-balance", async (req, res) => {
    try {
        
        const { walletPrivate, walletAddress, contractAddress,netType} = req.body;

        // const walletPrivate = "0xcbbbc2d60b2b8db19312d50f18bc8a83e48e72bbb906df579fb07fb7364dc7aa";
        // const TokenNetwork = await Setting.findOne({
        //     where: {
        //         key: 'token_network',
        //     },
        // });
        // const TokenAddress = await Setting.findOne({
        //     where: {
        //         key: 'token_address',
        //     },
        // });
        // const tokenNet = TokenNetwork.toJSON();
        // const tokenAdd = TokenAddress.toJSON();
        

        // console.log(tokenNet, '\n\n', tokenNet.value);
         const rpc_url = (netType === 'livenet') ? process.env.NODE_RCP_URL : process.env.NODE_TEST_RCP_URL;


        const provider = new ethers.JsonRpcProvider(rpc_url);
       
        const contract = new ethers.Contract(contractAddress, require('./common-abi.json'), provider);

        const wallet = new ethers.Wallet(walletPrivate);
        const connectedWallet = wallet.connect(provider);



        
        const balance = await provider.getBalance(connectedWallet.address);
      
        const tokenBalance = await contract.balanceOf(walletAddress);
        
        const balanceObj = {};

        // if (address?.length > 0) {
        //     address.forEach(async (token) => {
        //         const tempContract = new ethers.Contract(token, require('./common-abi.json'), provider);
        //         const balance = await tempContract.balanceOf("0xDbeaeb8F410C204A838c19d0DE3521CFE9F4615B");
        //         balanceObj[token] = ethers.formatEther(balance) ?? 0;
        //     });
        // }

        // console.log(await contract.name());
        // const tokenName = await contract.name();
        const tokenSymbol = await contract.symbol();
        // const tokenDecimals = await contract.decimals();
        // const tokenAddress = "0xDbeaeb8F410C204A838c19d0DE3521CFE9F4615B";
        // const token = {
        //     name: tokenName,
        //     symbol: tokenSymbol,
        //     decimals: Number(tokenDecimals),
        //     address: tokenAddress,
        //     balance: ethers.formatEther(tokenBalance)
        // }

        const token = {
            symbol: tokenSymbol,
            balance: ethers.formatEther(tokenBalance)
        }

        res.status(200).json({ bnb: ethers.formatEther(balance.toString()),token });
    } catch (err) {
        // console.log(err, '\n\n');
        // console.log(err.stack);
        res.status(400).json({ error: err.message });
    }
});

app.post('/check-token', async (req, res) => {
    try {
        const {address} = req.body;
        if (ethers.isAddress(address)) {
           
            const provider = new ethers.JsonRpcProvider(process.env.NODE_TEST_RCP_URL);

            const byteCode = await provider.getCode(address);
            if (byteCode === '0x') {
                return res.status(400).json({error: 'Invalid Address'})
            } else {
                const tokenContract = new ethers.Contract(address, require('./common-abi.json'), provider);
                const tokenName = await tokenContract.name();
                const tokenSymbol = await tokenContract.symbol();
                const tokenDecimals = await tokenContract.decimals();
                const tokenAddress = await tokenContract.getAddress();

                const token = {
                    tokenAddress, tokenDecimals: Number(tokenDecimals), tokenName, tokenSymbol
                }
                return res.status(200).json({token});
            }
        } else {
            return res.status(400).json({error: 'Invalid Address'})
        }
    } catch (err) {
        // console.log(err, '\n\n');
        // console.log(err.stack);
        res.status(400).send({error: err})
    }
});

app.post("/gas_fees", async (req, res) => {
    try {
        const { amount, toAddress, walletPrivate, contractAddress,tokenNet } = req.body;
        
        var rpc_url = tokenNet === 'livenet' ? process.env.NODE_RCP_URL : process.env.NODE_TEST_RCP_URL;

        console.log(rpc_url);

        const provider = new ethers.JsonRpcProvider(rpc_url);
       

        // const tokenAddress = contractAddress;
        // const tokenAbi =  require('./common-abi.json');

        // const wallet = new ethers.Wallet(walletPrivate, provider);
        // const tokenContract = new ethers.Contract(tokenAddress, tokenAbi, wallet);
       

        const sendAmount = ethers.parseEther(amount);

        // const tx = await tokenContract.transfer(toAddress, sendAmount);
      
        // const gas = await provider.estimateGas(tx);

        const gas =  await provider.estimateGas({
            // Wrapped ETH address
            to: toAddress,
          
            // `function deposit() payable`
            data: "",
          
            // 1 ether
            value: sendAmount
          });

        
       

        res.status(200).json({data:ethers.formatEther(gas)});
    } catch (e) {
        res.status(400).json({ error: e.shortMessage ?? e.message });
    }
});

app.post("/transfer-bnb", async (req, res) => {
    try {
        const { amount, toAddress, walletPrivate,tokenNet } = req.body;

      
       
        const provider = new ethers.JsonRpcProvider(tokenNet === 'livenet' ? process.env.NODE_RCP_URL : process.env.NODE_TEST_RCP_URL);

        const wallet = new ethers.Wallet(walletPrivate, provider);

        const balance = await provider.getBalance(wallet.address);

        const parsedAmount = ethers.parseEther(amount);
        const txReq = {
            to: toAddress,
            value: ethers.parseEther(amount),
        };

        const transaction = await wallet.sendTransaction(txReq);
        const gas = await provider.estimateGas(transaction);
        if ((parsedAmount + gas) > balance) {
            return res.status(400).json({error: 'Insufficient Balance'});
        }
        const fees = parsedAmount + gas;
        const tx = await transaction.wait();
        // if (tx.status === 1) {
            res.status(200).json({ data: tx, amount, toAddress, contractAddress: 'binance',fees:ethers.formatEther(fees) });
        // }
    } catch (e) {
        // console.log(err, '\n\n');
        // console.log(err.stack);
        // console.log(e.code)
        if (e.code === 'INSUFFICIENT_FUNDS') {
            return res.status(400).json({error: 'Insufficient Balance'});
        }
        res.status(400).json({ error: e.shortMessage ?? e.message });
    }
});


app.post("/transfer-token", async (req, res) => {
    try {
        const { amount, toAddress, walletPrivate, contractAddress,tokenNet } = req.body;

        
        const provider = new ethers.JsonRpcProvider(tokenNet === 'livenet' ? process.env.NODE_RCP_URL : process.env.NODE_TEST_RCP_URL);

        const tokenAddress = contractAddress;
        const tokenAbi =  require('./common-abi.json');

        const wallet = new ethers.Wallet(walletPrivate, provider);
        const tokenContract = new ethers.Contract(tokenAddress, tokenAbi, wallet);

        const balance = await tokenContract.balanceOf(wallet.address);
        const binanceBalance = await provider.getBalance(wallet.address);

        const sendAmount = ethers.parseEther(amount);

        if (sendAmount > balance) {
            return res.status(400).send({error: "Insuficiant Token Balance"})
        }

        const tx = await tokenContract.transfer(toAddress, sendAmount);
       

       
        const gas = await provider.estimateGas(tx);

        if (gas > binanceBalance) {
            return res.status(400).send({error: "Insuficiant BNB Balance"})
        }

        

        const transaction = await tx.wait();


        res.status(200).json({data: transaction, amount, toAddress, contractAddress,fees:ethers.formatEther(gas)});
    } catch (e) {
        // console.log(err, '\n\n');
        // console.log(err.stack);
        if (e.code === 'INSUFFICIENT_FUNDS') {
            return res.status(400).json({error: 'Insufficient BNB Balance'});
        }
        res.status(400).json({ error: e.shortMessage ?? e.message });
    }
});



// app.use(cors());
// app.use(bodyParser.urlencoded({ extended: false }));

// app.use(bodyParser.json());

















// Define your API endpoints here
// app.get('/posts', async (req, res) => {
// 	let users = await excuteQuery({ query: 'SELECT * FROM users' });
//   let user = users[0];
//   res.json(users);

// });
// app.post('/api/auth/register', async (req, res) => {

//   var { email, password, name, spid, confirm_password } = req.body;
//   var uid = Math.floor(Math.random() * 100000);

//   var whilee = true;
//   while (whilee == true) {
//     var check_uid = await excuteQuery({
//       query: "Select * from users where uid='" + uid + "'"
//     });
//     if (check_uid == 0) {
//       uid = uid;
//       whilee = false;
//       break;
//     }
//   }

//   console.log(req.body);
//   if (email == undefined || password == undefined || spid == undefined || name == undefined) {
//     res.status(500).json({ message: 'All Fields Are Required!' });
//     return false;
//   }
//   if (email == "" || password == "" || spid == "" || name == "") {
//     res.status(500).json({ message: 'All Fields Are Required!' });
//     return false;
//   }
//   if (password != confirm_password) {
//     res.status(500).json({ message: 'Password not Match' });
//     return false;
//   }
//   var sp = await excuteQuery({
//     query: "Select * from users where uid='" + spid + "'"
//   });
//   if (sp.length == 0) {
//     res.status(500).json({ message: 'Invalid Sponser!' });
//     return false;
//   }

//   var user = await excuteQuery({
//     query: "Select * from users where email='" + email + "'"
//   });


//   if (user.length > 0) {
//     res.status(500).json({ message: 'User Already Exist,Please Login!' });
//     return false;
//   }
//   bcrypt.hash(password, 2, async (err, hash) => {

//     await excuteQuery({
//       query: 'INSERT INTO users(name,email,password,showPass,uid,spid) values(?)',
//       value: [[name, email, hash, password, uid, spid]],
//     });
//   });

//   var tagsp = spid;
//   var sppp = spid;
//   var user_id = uid;
//   var whileee = true;
//   var lv = 1;

//   while (whileee == true) {
//     var udata = await excuteQuery({
//       query: "Select * from users where uid='" + tagsp + "'"
//     });
//     // $udata = User::where("uid",$tagsp)->where("is_admin","!=",1)->get();
//     if (udata.length < 1 || tagsp == 'admin') {
//       whileee = false;
//       break;
//     }
//     await excuteQuery({
//       query: 'INSERT INTO downlines(tagsp,user_id,spid,level) values(?)',
//       value: [[tagsp, user_id, sppp, lv]],
//     });
//     var userdata = udata[0];
//     tagsp = userdata['spid'];
//     lv++;
//   }

//   res.json({ message: "Registration Successfully, Please Login" });
// });

// app.post('/api/auth/login', async (req, res) => {
//   // console.log(req.body);
//   var { email, password } = req.body;

//   // Check if user exists
//   var user = await excuteQuery({ query: `SELECT * FROM users where email='${email}'` });
//   user = user[0];
//   if (!user) {
//     return res.status(401).send({ message: 'Invalid email or password', status: 500 });
//   }

//   // console.log(user.password);
//   // Check if password is correct
//   var isMatch = await bcrypt.compare(password, user.password);
//   // console.log(isMatch);
//   if (!isMatch) {
//     return res.status(401).send({ message: 'Invalid email or password', status: 500 })
//   }

//   // Generate JWT token
//   const token = jwt.sign({ userId: user.id }, 'bVEPduYKOiGRHQUdeIgAZVKjryj7Zm9oekbJteku5XGN90WG1cRkfXAshXbiquXC')
//   res.json({ token: token, status: 200 })
// });


http.listen(4000, () => {
  console.log(`Server listening on port 4000`);
});

// app.post("/api/userDetail",async(req,res)=>{
//     let {id} = req.body;
//       var user = await excuteQuery({ query: `SELECT * FROM users where id='${id}'` });
//       if(user.length == 0){
//         res.send({status:500,message:"No User Found,Please Register"});
//         return false;
//       }

//       var credit = await excuteQuery({ query: `SELECT sum(amount) as credit FROM wallets where userId='${id}' and wallet_type='epin' and type='credit'` });
//       var debit = await excuteQuery({ query: `SELECT sum(amount) as debit FROM wallets where userId='${id}' and wallet_type='epin' and type='debit'` });

//       var balance = credit[0].credit-debit[0].debit;

//      user = user[0];
//      res.send({status:200,data:user,balance:balance});
// });

// app.post("/api/myOrders", async (req, res) => {
//   let { user_id } = req.body;
//   var orders = await excuteQuery({ query: `SELECT * FROM games where user_id='${user_id}' order by id desc` });
//   res.send({ status: 200, orders: orders });
// });
// app.post("/api/allOrders", async (req, res) => {
//   var orders = await excuteQuery({ query: `SELECT * FROM games order by id desc` });
//   res.send({ status: 200, orders: orders });
// });

// app.get('/api/getTime', async (req, res) => {
//   var timer = await excuteQuery({ query: `SELECT * FROM timers order by id desc limit 1` });
//   timer = timer[0];
//   res.send({ timer: timer });
// });

// app.get('/api/getGameId', async (req, res) => {
//   var game_id = await excuteQuery({ query: `SELECT * FROM game_ids where expire = 0 order by id desc limit 1` });
//   game_id = game_id[0];
//   res.send({ game_id: game_id });
// });

// app.post('/api/submitBet', async (req, res) => {
//   var { user_id, amount, type, color, game_id } = req.body;
//   console.log(req.body);

//   if (color == "" && type == "") {
//     res.send({ status: 500, message: "Please Select Valid Color" });
//     return false;
//   }
//   if (amount == "") {
//     res.send({ status: 500, message: "Please Select Bet Amount" });
//     return false;
//   }


//   var credit = await excuteQuery({ query: `SELECT sum(amount) as credit FROM wallets where userId='${user_id}' and wallet_type='epin' and type='credit'` });
//   var debit = await excuteQuery({ query: `SELECT sum(amount) as debit FROM wallets where userId='${user_id}' and wallet_type='epin' and type='debit'` });

//   var balance = credit[0].credit - debit[0].debit;
//   if (balance < amount) {
//     res.send({ status: 500, message: "Insufficient Balance" });
//     return false;
//   }
//   var user = await excuteQuery({ query: `SELECT * FROM users where id='${user_id}'` });
//   user = user[0];

//   await excuteQuery({
//     query: 'INSERT INTO wallets(userId,user_id,description,wallet_type,transaction_type,type,amount,game_id) values(?)',
//     value: [[user.id, user.id, 'game bet', 'epin', 'game', 'debit', amount, game_id]],
//   });

//   await excuteQuery({
//     query: 'INSERT INTO games(game_id,user_id,bet,type,color) values(?)',
//     value: [[game_id, user.id, amount, type, color]],
//   });


//   res.json({ message: "Bet Submitted successfully" });
// });

// Export the Express app
// export default app