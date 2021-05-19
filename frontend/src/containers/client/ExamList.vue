<template>
    <div class="container wrap ">
        <div class="row">
            <div class="col-8">
                <div class="exam"> 
                    <h1>Danh sách đề</h1>

                    <div class="exam__list">
                       <a class="exam--link" href="">Exam1</a>
                        <a class="exam--link"  href="">Exam1</a>
                       <a  class="exam--link" href="">Exam1</a>


                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="profile__header">
                    <div class="header__img">
                        <img class="header__img--link" src="../../assets/cho.jpg" alt="">
                    </div>
                    <div class="profile__nav--info">
                        <h5 class="user_name">Username: Phuc</h5>
                        <p class="address__state">Address:Hue</p>
                    </div>


                </div>
                <div class="profile__btn">
                    <button class="btn--click ">Login</button>
                    <button class="btn--click ">Logout</button>
                </div>
                <div class="profile__social">
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ExamList'
    }
</script>

<style scoped>
    .header__img {
        display: flex;
        justify-content: center;


    }

    .header__img--link {
        display: block;
        height: 200px;
        width: 200px;
        border-radius: 50%;

    }

    .profile__btn {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn--click {
        background-color: var(--green-color);
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        margin: 0 5px;
    }
    .btn--click:hover {
       color: black;
    }

    .profile__nav--info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .user_name {
        margin-top: 5px;
    }

    /* social icon */
    /* Style all font awesome icons */
    .fab {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
    }

    /* Add a hover effect if you want */
    .fab:hover {
        opacity: 0.7;
    }

    /* Set a specific color for each brand */

    /* Facebook */
    .fa-facebook-square {
        color: #3B5998;
    }

    /* Google */
    .fa-google {
        color: #3B5998;
    }


    /* Twitter */
    .fa-twitter {
        color: 55ACEE;
    }

    .profile__social {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrap {
        padding-top: 10px;
    }
    .exam__list {
        display: flex;
        flex-direction: column;
      
    }
    .exam--link {
        padding: 5px 5px;
        cursor: pointer;
        text-decoration: none;        
    }

    .exam {
        background: var(--gray-color);
        padding: 1em;
        border-radius: 0 0 5px 5px;
        box-shadow: 5px 5px 5px #CCC;
        position: relative;
    }

    .introduce__content {
        padding: 0 0 0 3em;
        font-size: 16px;
    }
</style>