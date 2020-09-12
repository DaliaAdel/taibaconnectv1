@extends('layouts.app')
@section('content')

<section class="body">



    <section class="container-fluid header">

        <header>
            <div class="row">

                <div class="col-md-7  ">
                    <img src="{{ asset('images/h1.png') }}" class="float-left" width="100%" alt="">

                </div><!-- 2 -->


                <div class="col-md-5 text-right col1">
                    <div class=" d-block mr-5 col11">
                        <h1 class="display-4">تواصل طيبه </h1>
                        <p> شركه تقنيه توفر حلول برمجيه وحلول الاجهزه وانشاء النظم وتنفيذ حلول التقنيه ذكيه وتقدم الدعم والخدمات الاستشاريه </p>
                        <p> شركة تواصل طيبة لتقديم أحدث التقنيات والحلول الآمنة والخدمات الاستشارية للشركات والمؤسسات والهيئات الحكومية</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#"><i class="fab fa-facebook text-white p-2"></i></a>
                            <a href="#"><i class="fab fa-instagram text-white p-2"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in text-white p-2"></i></a>
                            <a href="#"><i class="fab fa-twitter text-white p-2"></i></a>
                        </div>
                    </div>



                </div><!-- 1 -->


            </div>
        </header>

    </section><!-- header -->



    <section id="aboutus">
        <div class="container-fluid py-5" >
            <div class="row d-flex flex-row-reverse">
            <!-- <div class="col-md-2">
                    <img src="images/4.png" class="d-block" width="100%" alt="">
                </div> -->
                <div class="col-md-4">
                    <img src="{{ asset('images/4.png') }}" class="d-block" width="100%" alt="">
                </div>
            <div class="col-md-8 mt-5 text-justify p-3" dir="rtl">
                    <p class="text-muted w-75">تم تأسيس  شركه تواصل طيبه لتقديم احداث التقنيات  والحلول الامنيه والخدمات الاستشاريه للشركات والمؤسسات والهيئات الحكوميه</p>
                    <p class="text-muted w-75">تاسست الشركه مع الرؤيه لتمكين الوصول الامن الى ابيانات والمعلومات والخدمات فى اى وقت ومن اى مكان</p>
                    <p class="text-muted w-75">شركة تواصل طيبة هي شركة ذات خبرة في مجال الخدمات الفنية والتقنية. ونمتم بإنشاء خدمات التسويق والبحث على وسائل التواصل الاجتماعي. خدماتناتشمل : إنشاء محتوى إبداعي ، إنشاء فعاليات وأنشطة ، الاهتمام بالإنتاج واستراتيجيات التسويق ونقدم استشارات تسويق - في أدناه خطة التسويق التي سيتم اتباعها</p><br>
                    <a href="#" class="btn btn-info rounded mr-5">لمعرفه المزيد</a>
                </div>



            </div>
        </div>
    </section><!-- about us -->


    <!-- paginate -->
<section id="services" class="pb-5">
    <div class="container-fluid  py-5 ">
        <div class="row py-2 justify-content-center">
            @foreach ($pro as $item)
            <div class="col-md-3">
                @if ($item->id <=3)
                <div class="card" style="width: 20rem; height: 30rem;">
                    <img src="{{ asset('images/'.$item->image) }}"  class="card-img-top img-fluid">
                    <div class="card-body">
                      <h4 class="card-title text-center ">{{$item->name}}</h4>
                      <p class="card-text text-right">{{$item->desc}}</p>
                      <a href="#" class="btn btn-primary bbtn">للتواصل معنا</a>
                    </div>
                </div>
                @else
                <div class="card" style="width: 20rem; height: 37rem;">
                    <img src="{{ asset('images/'.$item->image) }}" class="card-img-top" >
                    <div class="card-body">
                      <h4 class="card-title text-center ">{{$item->name}}</h4>
                      <p class="card-text text-right">{{$item->desc}}</p>
                      <a href="#" class="btn btn-primary bbtn">للتواصل معنا</a>
                    </div>
                </div>
                @endif

            </div>
            @endforeach
        </div>

    </div>
    <div class="w-25 mx-auto">{{$pro->links()}}</div>
</section><!-- services -->


<!-- partners -->
<section id="partners">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/1x/1.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/2.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/3.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/4.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/5.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/6.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/7.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/8.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/9.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/10.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/11.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/12.png') }}" width="100%" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/1x/13.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/14.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/15.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/16.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/17.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/18.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/19.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/20.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/21.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/22.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/23.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/24.png') }}" width="100%" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/1x/25.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/26.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/27.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/28.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/29.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/30.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/31.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/32.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/33.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/34.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/35.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/36.png') }}" width="100%" alt="">
            </div>
        </div>


        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/1x/37.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/38.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/39.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/40.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/41.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/1x/42.png') }}" width="100%" alt="">
            </div>

        </div>



    </div>

</section><!-- partners -->

<!-- contactus -->

<section id="contactus">
    <div class="container py-5">
        <div class="row d-flex flex-row-reverse">
            <div class="col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13690.187434717867!2d31.342725649999995!3d30.9272879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1588536273822!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div><!-- map -->

            <div class="col-md-7 mt-4" dir="rtl">
                <h3 class="display-4 text-right">تواصل معنا </h3>
                <form class="pt-4" action="" method="POST">
                    <div class="row">
                        <div class="col-4 py-2">
                            <label for="username" class="text-left"> الاسم بالكامل :</label>
                        </div><!-- 4 -->

                        <div class="col-8 py-2">
                           <input type="text" id="username" class="form-control form-control-lg" name="username">
                        </div><!-- 8 -->

                    </div><!-- row name -->

                    <div class="row">
                        <div class="col-4 py-2">
                            <label for="username" class="text-right">البريد الالكترونى : </label>
                        </div><!-- 4 -->

                        <div class="col-8 py-2">
                           <input type="email" id="email" class="form-control form-control-lg" name="email">
                        </div><!-- 8 -->

                    </div><!-- row email -->


                    <div class="row">
                        <div class="col-4 py-2">
                            <label for="" class="text-right">هل لديك استفسار ؟</label>
                        </div><!-- 4 -->

                        <div class="col-8 py-2">
                           <textarea class="form-control form-control-lg"></textarea>
                        </div><!-- 8 -->

                    </div><!-- row  -->


                    <div class="row">
                        <div class="col-4"></div><!-- 4 -->

                        <div class="col-8 py-2">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">ارسال</button>
                        </div><!-- 8 -->

                    </div><!-- row  -->



                </form>
            </div><!-- form -->
    </div><!-- row -->


    </div>

</section> <!-- contactus -->


<!-- custmers -->
<section id="custmers">

    <div class="container py-5">
        <h2 class="display-4 text-right">عملاءنا</h2>
        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/2x/1.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/2.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/3.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/4.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/5.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/6.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/7.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/8.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/9.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/10.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/11.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/12.png') }}" width="100%" alt="">
            </div>

        </div>

        <div class="row">
            <div class="col-md-1">
                <img src="{{ asset('images/2x/13.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/14.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/15.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/16.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/17.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/18.png') }}" width="100%" alt="">
            </div>
            <div class="col-md-1">
                <img src="{{ asset('images/2x/19.png') }}" width="100%" alt="">
            </div>

        </div>
    </div>

</section><!-- custmers -->

<footer class="py-2 bg-light">
    <div class="container-fluid">
        <div class="row d-flex flex-row-reverse">
            <div class="col-md-3">
                <img src="{{ asset('images/tc.png') }}"  width="100%" alt="">
            </div>
            <div class="col-md-4 mt-5">
                <img src="images/Capture.PNG" class="img-fluid" alt="">
              </div><!-- 2 -->
            <div class="col-md-4 text-center mt-5 pt-5">
                <h5>فروعنا</h5>
                <ul>
                  <li class="d-inline-flex p-2"><a href="#"class="branchs"> السعودية-المدينه </a> </li>
                  <li class="d-inline-flex p-2"><a href="#"class="branchs"> مصر- مدينه نصر</a></li>
                </ul>
                <h5>التواصل الاجتماعى</h5>
                <div class="text-center">
                  <a href="https://www.snapchat.com/add/taibaflocks"><i class="fab fa-snapchat-square fa-2x p-2" style="color: #fffc00;"></i></a>
                  <a href="https://www.instagram.com/taibaflocks/"> <i class="fab fa-instagram-square fa-2x p-2" style="color: RGB(195, 42, 163);"></i></a>
                  <a href="https://ae.linkedin.com/organization-guest/company/taiba-flocks-travel-agency?challengeId=AQGviHZOu-A26AAAAXKjHA3NAeISRKHuAax59e8eQCzbiTGAWbbHWOlM23POGiJnR8Djui2weMxRtRzAo4lCB1FNrgL_1XLCQw&submissionId=cd89b3c7-5a79-1716-1076-c6da81dd0c20"><i class="fab fa-linkedin fa-2x p-2 "style="color: #007bb5;"></i></a>
                  <a href="https://www.facebook.com/taibaflocks/"><i class="fab fa-facebook-square fa-2x p-2" style="color: #3b5998;"></i></a>
                  <a href="https://www.facebook.com/taibaflocks/"><i class="fab fa-whatsapp fa-2x p-2" style="color: #66b35c;"></i></a>

                </div>
            </div>
        </div>
    </div>


  </footer>

</section><!-- body -->



@endsection
