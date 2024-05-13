const mysql  =  require('serverless-mysql');
const dotenv = require("dotenv");
dotenv.config({
    path: "./.env",
})

const db = mysql({
config: {
    host: process.env.DB_HOST,
    database:process.env.DB_DATABASE,
    user: process.env.DB_USERNAME,
    password: process.env.DB_PASSWORD
  }
});
async function excuteQuery({ query,value }) {
  try {
    const results = await db.query(query,value);
    await db.end();
    return results;
  } catch (error) {
    console.log(error);
    return { error };
  }
}

module.exports = {excuteQuery};