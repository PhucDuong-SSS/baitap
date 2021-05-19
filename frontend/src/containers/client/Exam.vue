<template>
    <div class="container wrap ">
        <div class="row">
            <div class="col-8">
                <div class="exam">
                    <h3>Danh sách đề</h3>
                    <div class="wrap">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q. which option best describes your job role?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> <label class="options">Small
                                    Business Owner or Employee <input type="radio" name="radio"> <span
                                        class="checkmark"></span> </label> <label class="options">Nonprofit Owner or
                                    Employee <input type="radio" name="radio"> <span class="checkmark"></span> </label>
                                <label class="options">Journalist or Activist <input type="radio" name="radio"> <span
                                        class="checkmark"></span> </label> <label class="options">Other <input
                                        type="radio" name="radio"> <span class="checkmark"></span> </label>
                            </div>
                        </div>

                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q. which option best describes your job role?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options"> <label class="options">Small
                                    Business Owner or Employee <input type="radio" name="radio"> <span
                                        class="checkmark"></span> </label> <label class="options">Nonprofit Owner or
                                    Employee <input type="radio" name="radio"> <span class="checkmark"></span> </label>
                                <label class="options">Journalist or Activist <input type="radio" name="radio"> <span
                                        class="checkmark"></span> </label> <label class="options">Other <input
                                        type="radio" name="radio"> <span class="checkmark"></span> </label>
                            </div>
                        </div>


                    </div>
                    <div class="d-flex justify-content-start pt-3">                          
                        <div class="mr-1"> <button class="btn btn-success">Kết quả</button> </div>
                        <div class="mr-1" > <button class="btn btn-success">Làm bài</button> </div>
                        <div class="mr-1" > <button class="btn btn-success">Đáp án</button> </div>
                        <div class="mr-1" > <button class="btn btn-success">Dich nghĩa</button> </div>
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
        name: 'Exam'
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
        box-shadow: 1px 1px 1px #CCC;
        position: relative;
    }

    .introduce__content {
        padding: 0 0 0 3em;
        font-size: 16px;
    }

    /* exam */

    .wrap>p {
        font-size: 32px
    }

    .question {
        width: 75%;
        border-bottom: 1px solid rgb(130, 123, 123);
    }

    .question:last-child {
        border: none;
    }

    .options {
        position: relative;
        padding-left: 40px
    }

    #options label {
        display: block;
        margin-bottom: 15px;
        font-size: 14px;
        cursor: pointer
    }

    .options input {
        opacity: 0
    }

    .checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #555;
        border: 1px solid #ddd;
        border-radius: 50%
    }

    .options input:checked~.checkmark:after {
        display: block
    }

    .options .checkmark:after {
        content: "";
        width: 10px;
        height: 10px;
        display: block;
        background: white;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark {
        background: #21bf73;
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

   
    .btn-success:hover {
        background-color: var(--blue-color);
        transform: translateX(1px);
        color: black;
    }

    .btn-success {
        padding: 5px 25px;
        background-color: var(--green-color);
    }
</style>