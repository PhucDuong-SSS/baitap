<template>
    <div class="container wrap ">
        <div class="row">
            <div class="col-8">
                <article>
                    <h1>Giói thiệu</h1>

                    <div class="introduce__content">
                        <p>
                            Tiếng Nhật Bản, Tiếng Nhật hay Nhật ngữ (日本語にほんご (Nhật Bản ngữ) Nihongo?, [ɲihoŋɡo] (nghe)
                            hoặc [ɲihoŋŋo]) là một ngôn ngữ Đông Á được hơn 125 triệu người sử dụng ở Nhật Bản và những
                            cộng đồng dân di cư Nhật Bản khắp thế giới. Nó là một ngôn ngữ chắp dính (khác biệt với
                            tiếng Việt vốn thuộc vào loại ngôn ngữ đơn lập phân tích cao) và nổi bật với một hệ thống
                            các nghi thức nghiêm ngặt và rành mạch, đặc biệt là hệ thống kính ngữ phức tạp thể hiện bản
                            chất thứ bậc của xã hội Nhật Bản, với những dạng biến đổi động từ và sự kết hợp một số từ
                            vựng để chỉ mối quan hệ giữa người nói, người nghe và người được nói đến trong cuộc hội
                            thoại. Kho ngữ âm của tiếng Nhật khá nhỏ, với một hệ thống ngữ điệu rõ rệt theo từ. Tiếng
                            Nhật cổ nhất được biết đến chủ yếu dựa vào trạng thái của nó vào thế kỷ thứ VIII, khi ba tác
                            phẩm chủ yếu của tiếng Nhật cổ được dịch (hai bộ sử Kojiki (古事記こじき (Cổ sự ký)?), Nihon Shoki
                            (日本書紀にほんしょき (Nhật Bản thư kỷ)?), và thi tập Man'yoshu (万葉集まんようしゅう (Vạn diệp tập)?); nhưng
                            một số lượng tài liệu ít hơn, chủ yếu là chữ khắc, còn cổ hơn. Những chứng thực về tiếng
                            Nhật cổ nhất có thể được tìm thấy trong một số tư liệu thành văn của Trung Quốc từ năm 252.
                        </p>
                        <p>
                            Dành cho các bạn mới bắt đầu học tiếng Nhật, học bảng chữ cái hiragana và katakana. Các bài
                            luyện đọc, viết, tổng hợp, kiểm tra hiragana bằng video. Các câu hội thoại cơ bản … Mới bắt
                            đầu học tiếng Nhật ai cũng phải vượt khó phần học này. Nếu thấy khó nhai thì bạn có thể học
                            song song với TIẾNG NHẬT GIAO TIẾP sẽ cảm thấy thú vị hơn.
                        </p>
                        <p>
                            Sau khi học xong bảng chữ cái và các câu chào hỏi cơ bản, bạn học tiếp giáo trình Minna ni
                            Nihongo và tiếng Nhật giao tiếp. 50 bài học Minna no Nihongo chia làm 8 thể loại: Từ vựng,
                            ngữ pháp, luyện đọc, hội thoại, luyện nghe, bài tập, hán tự và kiểm tra. 30 bài học tiếng
                            Nhật giao tiếp giúp bạn phản xạ tốt cho việc nghe và nói tiếng Nhật
                        </p>
                        <p>
                            Trước khi học lớp trung cấp bạn ôn lại ngữ pháp ở sơ cấp qua giáo trình 総まとめポイント20. Sau đó
                            bạn học lần lượt các giáo trình 日本語総まとめN3 , N2. Bài học chia làm 5 thể loại: Từ vựng, ngữ
                            pháp, hán tự, bài đọc, luyện nghe. Các bài học giúp ích cho quá trình ôn luyện N2,N3.
                        </p>
                        <p>
                            Tổng hợp các kiến thức từ vỡ lòng cho đến hết trung cấp. Các bài ôn tập tiếng Nhật như chia
                            động từ, cách dùng giới từ … Tổng hợp các cấu trúc ngữ pháp n1,n2,n3,n4,n5…

                        </p>
                        <h4>Luyện thi</h4>
                        <p>
                            Các đề thi năng lực tiếng Nhật của các năm trước. Các bạn có thể bổ sung thêm kiến thức và
                            kinh nghiệm cho các kỳ thi tiếng Nhật

                        </p>

                    </div>
                </article>
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
                    <button v-if="AccessToken" @click="logout()" class="btn--click ">Logout</button>
                    <div v-else>
                      <router-link :to="{name: 'Login'}"><button v-ele class="btn--click ">Login</button></router-link>
                      <router-link :to="{name: 'Register'}"><button  class="btn--click ">Register</button></router-link>
                    </div>
                    
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
        name: 'Introduce',
        data() {
            return {
                AccessToken:AccessToken,

            }
        },
        methods : {
            logout() {
                localStorage.removeItem(accessToken)
            }
        }
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

    article {
        background: var(--gray-color);
        padding: 1em;
        border-radius: 0 0 5px 5px;
        box-shadow: 5px 5px 5px #CCC;
        position: relative;
        z-index: -1;
    }

    .introduce__content {
        padding: 0 0 0 3em;
        font-size: 16px;
    }
</style>