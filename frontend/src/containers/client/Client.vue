<template>
     <div class="container-fluid">
          <Navbar />
          <Introduce/>
          <Footer />
     </div>

</template>

<script>
     import Navbar from './Navbar';
     import Footer from './Footer';
     import Introduce from  './Introduce'
     // import ExamList from './ExamList';
     // import Exam from './Exam'
     export default {
          name: 'Client',
          components: { Navbar , Footer, Introduce  }
     }
</script>

<style>
     *{
          --menu-item-size: 50px;
        --green-color: #329680;
        --blue-color: #099c95;
        --dark-green-color: #175b52;
        --white-color: #FFF;
        --gray-color: #EDEDED;
     }
</style>