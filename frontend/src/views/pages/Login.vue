<template>
  <div class="c-app flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol md="8">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm>
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <CInput
                    placeholder="Email"
                    autocomplete="username email"
                    v-model="user.email"
                  >
                    <template #prepend-content><CIcon name="cil-user"/></template>
                  </CInput>
                  <CInput
                    placeholder="Password"
                    type="password"
                    autocomplete="curent-password"
                    v-model="user.password"
                  >
                    <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                  </CInput>
                  <CRow>
                    <CCol col="6" class="text-left">
                      <CButton @click="userLogin()" color="primary" class="px-4">Login</CButton>
                    </CCol>
                    <CCol col="6" class="text-right">

                      <CButton color="link" class="d-lg-none">Register now!</CButton>
                    </CCol>
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard>
            <CCard
              color="primary"
              text-color="white"
              class="text-center py-5 d-md-down-none"
              body-wrapper
            >
              <CCardBody>
                <h2>Sign up</h2>
                
                <router-link :to="{name: 'Register'}">
                    <CButton
                  color="light"
                  variant="outline"
                  size="lg"
                >
                  Register Now!
                </CButton>
                </router-link>

              </CCardBody>
            </CCard>
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>

<script>
export default {
  name: 'Login',
   data() {
    return {
      user: {email: null,password: null}
    }
  },
  methods: {
      userLogin:function() {
        console.log( this.user.email)
          axios.post('/login',{
            
                email : this.user.email,
                 password : this.user.password,
               
          })
          .then(function(response){
              localStorage.setItem('accessToken',response.data.data.access_token);
          })
          .catch(function(error){
            console.log(error)
          })
      }
  }

}
</script>
