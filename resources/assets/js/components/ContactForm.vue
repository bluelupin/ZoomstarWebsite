<template>
    <div>
        <div class="alert" role="alert" v-show="show">
          <p class=" alert-success spacing"> {{ body }}</p> 
         <figure class="image"><img src="/images/doneicon.png" alt=""></figure>        
        </div>
        <div v-show="!show">
            <form  v-on:submit.prevent="saveform()" id="contact-form" role="form">
              <div class="clearfix">
                <div class="field half first">
                    <label for="name">Name</label>
                    <input type="text" name="name" v-model="contact.name"  placeholder="Your Name" v-validate="'required'">
                          <span v-show="!showError" class="invalid-feedback">{{ errors.first('name') }}</span>
                          <span  class="invalid-feedback">{{ nameError}}</span>
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" name="email" v-model="contact.email"  placeholder="Email Address" v-validate="'required'">
                            <span v-show="!showError" class="invalid-feedback ">{{ errors.first('email') }}</span>
                          <span   class="invalid-feedback">{{ emailError}}</span>
                </div>
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea placeholder="Enter Your Message(max. 200)" v-model="contact.msg" maxlength="200" rows="4" name="message"></textarea>
            </div>
             <div class="form-group center">
                <button type="submit" @click="loader" v-if="this.load == true" class="theme-btn btn-style-two">Send Message</button>
                <span class="loader" v-if="this.load == false"><img src="/images/preloader.gif" alt=""></span>
            </div>
        </form> 
        </div>
        
    </div>
</template>

<script>
import Vue from "vue";
Vue.use(VeeValidate);
import VeeValidate from "vee-validate";
import swal from "sweetalert2";
export default {
  data: function() {
    return {
      contact: {
        name: "",
        email: "",
        msg: ""
      },
      body: "",
      load: true,
      result: "",
      show: false,
      nameError: "",
      emailError: "",
      showError: false
    };
  },
  methods: {
    saveform() {
      axios
        .post("/send", this.contact)
        .then(response => {
          this.result = response.data;
          this.flash(response.data);
          this.contact.name = "";
        })
        .catch(errors => {
          this.error = errors.response.data.errors;
          this.nameError = this.error.name[0];
          this.emailError = this.error.email[0];
          this.showError = true;
          this.load = true;
        });
    },
    flash(result) {
      this.show = true;
      this.body = result;
    },
    loader: function() {
      this.load = false;
    }
  }
};
</script>
