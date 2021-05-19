<template>
  <div>
    <WidgetsDropdown/>
    <CCard>
      <CCardBody>
        <CRow>
          <CCol sm="5">
            <h4 id="traffic" class="card-title mb-0">Infomation</h4>
          </CCol>
          <CCol sm="7" class="d-none d-md-block">
            <CButton color="primary" class="float-right">
              <CIcon name="cil-cloud-download"/>
            </CButton>
           
          </CCol>
        </CRow>
      </CCardBody>
      <CCardFooter>
        <CRow class="text-center">
          <CCol md sm="12" class="mb-sm-2 mb-0">
            <div class="text-muted">Users</div>
            <strong>29.703 Users</strong>
       
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0 d-md-down-none">
            <div class="text-muted">Exam</div>
            <strong>24.093 Exam</strong>
         
          </CCol>
          <CCol md sm="12" class="mb-sm-2 mb-0">
            <div class="text-muted">Questions</div>
            <strong>78.706 Questions </strong>
        
          </CCol>       
        </CRow>
      </CCardFooter>
    </CCard>
    <WidgetsBrand/>
    <CRow>
    
    </CRow>
  </div>
</template>

<script>

export default {
  name: 'Dashboard',
 
  data () {
    return {
     
      tableFields: [
        { key: 'avatar', label: '', _classes: 'text-center' },
        { key: 'user' },
        { key: 'country', _classes: 'text-center' },
        { key: 'usage' },
        { key: 'payment', label: 'Payment method', _classes: 'text-center' },
        { key: 'activity' },
      ]
    }
  },
  methods: {
    color (value) {
      let $color
      if (value <= 25) {
        $color = 'info'
      } else if (value > 25 && value <= 50) {
        $color = 'success'
      } else if (value > 50 && value <= 75) {
        $color = 'warning'
      } else if (value > 75 && value <= 100) {
        $color = 'danger'
      }
      return $color
    }
  }
}
</script>
