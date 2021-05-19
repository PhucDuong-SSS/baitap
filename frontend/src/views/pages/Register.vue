<template>
  <div class="d-flex align-items-center min-vh-100">
    <CContainer fluid>
      <CRow class="justify-content-center">
        <CCol md="6">
          <CCard class="mx-4 mb-0">
            <CCardBody class="p-4">
              <CForm>
                <h1>Register</h1>
                <p class="text-muted">Create your account</p>
                <CInput
                  placeholder="Full Name"
                  autocomplete="full_name"
                  v-model="user.full_name"
                >
                  <template #prepend-content><CIcon name="cil-user"/></template>
                </CInput>
                <CInput
                  placeholder="Email"
                  autocomplete="email"
                  prepend="@"
                  v-model="user.email"
                />
                 <CInput
                  placeholder="Phone"
                  autocomplete="phone"
                  v-model="user.phone"
                >
                  <template #prepend-content><CIcon name="cil-user"/></template>
                </CInput>
                
                <CInput
                  placeholder="Password"
                  type="password"
                  autocomplete="password"
                  v-model="user.password"
                >
                  <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                </CInput>            
                 
                <CButton @click="userRegister()" color="success" block>Create Account</CButton>
                <hr>
                <CButton color="success" block>Login</CButton>
              </CForm>
            </CCardBody>
            <CCardFooter class="p-4">
          
            </CCardFooter>
          </CCard>
        </CCol>
      </CRow>
    </CContainer>
  </div>
</template>

<script>
export default {
  name: 'Register',
  data() {
    return {
      user: {full_name : null, email: null,password: null, phone:null}
    }
  },
  methods: {
      userRegister:function() {
          axios.post('/register',{
              full_name : this.user.full_name,
               phone : this.user.phone,
                email : this.user.email,
                 password : this.user.password,
                 role_id: 3
          })
          .then(function(response){
            //   localStorage.setItem('accessToken',response.data.access_token);
              console.log(response.data.access_token)
          })
          .catch(function(error){
              console.log(error);
          })
      }
  }
}
</script>
