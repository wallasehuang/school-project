@extends('layouts.school-app')
@section('style')
<style>
.paypal-wrapper {
    width: 100%;
    text-align: center;
}
</style>
@endsection
@section('content')

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="slider_text">
                        <h3>給牠一次<br> <span>被愛的機會</span></h3>
                        <a href="about.html" class="boxed-btn4">我要領養</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dog_thumb d-none d-lg-block">
            <img src="img/banner/dog.png" alt="">
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- service_area_start  -->

<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <img class = "index1" src="img/index1.png"alt="">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">

                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                --></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <a href="https://health.ltn.com.tw/article/breakingnews/3283589" >
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_1.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                        <h3>毛小孩帶你遠離孤獨感</h3>
                        <p>綜合了美國學者們的說法整理出4大對抗孤獨的手段，包含了正視孤獨、放下社交軟體、養寵物或者是重新去定義孤獨。</p>
                        </div>
                </div>
                    </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service active">
                    <a href="https://news.ltn.com.tw/news/life/breakingnews/3272102">
                        <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_2.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                        <h3>超卡哇伊的寵物機器人</h3>
                        <p>Vanguard Industries開發了一款毛絨絨的寵物機器人MOFLIN，它有一團毛絨絨的身體，還會扭動和發出微弱的叫聲。</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                    <a href="https://news.ltn.com.tw/news/life/breakingnews/3268493" >
                    <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                            <div class="service_icon">
                                <img src="img/service/service_icon_3.png" alt="">
                            </div>
                        </div>
                        <div class="service_content text-center">
                        <h3>金門寵物年度健診登場 </h3>
                        <p>中興大學USR獸醫團隊首度前進金門協助寵物巡迴健診，展開金門本島健診巡迴施打狂犬病疫苗，提供毛孩優質飼養環境。</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- pet_care_area_start  -->
<img class = "index1" src="img/index2.png"alt="">
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="img/about/pet_care.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info">
                    <div class="section_title">
                        <h3><span>給他一次 </span> <br>
                            被愛的機會</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Qicx1srGmHE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->

<!-- adapt_area_start  -->
<!--
<div class="adapt_area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="adapt_help">
                    <div class="section_title">
                        <h3><span>We need your</span>
                            help Adopt Us</h3>
                        <p>Lorem ipsum dolor sit , consectetur adipiscing elit, sed do iusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
                        <a href="contact.html" class="boxed-btn3">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adapt_about">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/1.png" alt="">
                                <div class="adapt_content">
                                    <h3 class="counter">452</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/3.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                            <div class="single_adapt text-center">
                                <img src="img/adapt_icon/2.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Pets Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- adapt_area_end  -->

<!-- testmonial_area_start  -->
<img class = "index1" src="img/index3.png"alt="">
<div class="testmonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="textmonial_active owl-carousel">
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>愛的阮捷</h4>
                                <span>資管四乙同學</span>
                                <p>胖胖是一隻來自新屋收容所的小貓咪
                                    是個2歲的金吉拉
                                    個性溫吞,文靜
                                    是個可愛指數爆錶的小帥哥
                                    說到為什麼會帶他回家呢？
                                    那是因為初次見面主人我就被胖胖迷的團團轉
                                    說一見鍾情也不為過
                                    就這樣莫名其妙....痾.. 不對...是一鼓作氣
                                    手續辦一辦就把胖胖帶回家了
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>奧提斯詩賢</h4>
                                <span>資管四丙同學</span>
                                <p>收容所的貓貓狗狗比不上寵物店的可愛溫馴
                                    花錢買的比較安心
                                    其實
                                    我還滿贊成PPT版上某版友回覆的說法
                                    就算報章誇張了點
                                    但最終的目的還不是為了讓大眾
                                    多給這些可愛的貓狗一些活下來的機會

                                    在許許多多的收容所中
                                    我相信很多如同新屋收容所這邊一樣
                                    很多所謂的名貓名犬也成為收容所裡落魄的一員

                                    喜歡花錢買動物的朋友
                                    我覺得你們真的可以多給收容所一些機會
                                    也多給許多關懷流浪動物的機構一個機會
                                    去看看 去找找
                                    也許你的緣分不是在那一間間的寵物店裡
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>愛河宣宇</h4>
                                <span>高雄女友狂戰士</span>
                                <p>前幾個星期看到收容所有一批吉娃娃疑似被黑心繁殖場惡意棄養，
                                    因為想說狗狗待在收容所很容易感染疾病，所以趁放假就殺去收容所，
                                    想說先接出來中途送養。
                                    那一批約被棄養10隻，狀況較佳較漂亮的狗已被認養差不多了，
                                    只剩2隻吉娃娃+1隻皮膚病嚴重但非常親人的瑪爾，所以就一起打包帶走了。認養流程並沒有很繁複，首先就是先選定要認養的狗狗(只能隔著鐵籠看)，
                                    告知工作人員後，進辦公室填寫認養表格，出示身分證件以供核對，
                                    工作人員會進籠將狗狗帶出，再由獸醫進行基本檢查後，
                                    將狗狗施打晶片及狂犬疫苗後，就完成認養手續了。
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- testmonial_area_end  -->
<img class = "index1" src="img/index4.png"alt="">
<!-- team_area_start  -->
<div class="team_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center mb-95">

                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="img/team/1.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>貓咪 Emaia</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="img/team/2.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>狗狗 Smith</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="img/team/3.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>貓咪Amy</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img class = "index1" src="img/index5.png"alt="">
<div class="paypal-wrapper" id="paypal-section">

</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('#paypal-section');</script>

 @endsection
