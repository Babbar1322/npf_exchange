<template>
  <div>
    <Header />
    <div>

      <div class="min-vh-100">
        <!-- login start -->

        <div class="card col-md-5 mx-auto mt-5 ">
          <div class="row card-body py-5">
            <div class="px-5">
              <h3 class="text-white text-center">Phone Verification</h3>
              <form class="mt-5" @submit.prevent="login">
                <div class="mb-4">
                  <label for="exampleInputphonenuber" class="form-label text-white">Phone number</label>
                  <input type="number" class="form-control" id="exampleInputPhonenumber" aria-describedby="phoneHelp"
                    v-model="phonenumber">
                </div>
                <label for="exampleInputcode" class="form-label text-white">Verification code</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" aria-label="Recipient's username"
                    aria-describedby="button-addon2" />
                  <button class="btn button" type="button" id="button-addon2" data-mdb-ripple-init
                    data-mdb-ripple-color="dark">
                    Code Send
                  </button>
                </div>
                <button type="submit" class="btn w-100 text-white mt-4"
                  style="background-color: white; color:black !important;">Submit</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "phone_verification"
}
</script>
