@extends('layouts.app')


@section('content')




<body style="background-color: rgb(218, 216, 216); ">

    <div class="container=flued">


       
        <!-----postes----->
        <div class="container">
            <div class="row">
                <div class="col-lg-4"><img src="image/9.jpg" alt="...">
                    <h3>Reading</h3>
                    <p>Learning to read is about listening and understanding as well as working out what is printed on
                        the page. Through hearing stories, children are exposed to a wide range of words. This helps
                        them build their own vocabulary and improve their understanding when they listen, which is vital
                        as they start to read</p><a class="btn btn-primary" href="reading.html" role="button"
                        target="-blank">view post</a>
                </div>
                <div class="col-lg-4"><img src="image/12.jpg" alt="...">
                    <h3>writing</h3>
                    <p>Writing equips us with communication and thinking skills. Writing expresses who we are as people.
                        Writing makes our thinking and learning visible and permanent. Writing fosters our ability to
                        explain and refine our ideas to others and ourselves.</p><a class="btn btn-primary"
                        href="writing.html" role="button" target="-blank">view post</a>
                </div>
                <div class="col-lg-4"><img src="image/8.jpg" alt="...">
                    <h3>travelling</h3>
                    <p>Traveling is a very crucial part of life as it is the best way to get out of the busy schedule.
                        It is also to experience life in different ways . Traveling is actually a good remedy for
                        stress, anxiety and depression. ... Traveling is all about exploring new places, cultures,
                        cuisines, rituals and styles of living.</p><a class="btn btn-primary" href="viewposts.html"
                        role="button" target="-blank">view post</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">

            <div class="row">
                <div class="col-lg-4"><img src="image/6.jpg">
                    <h3> Photograph</h3>
                    <p>The reason why photography is important is that it freezes memories. It captures a moment in time
                        that you'll be able to remember and cherish years from now. If you look at the images that
                        people save, usually it's photos of their family, friends, pets, places, and items they love.

                    </p><a class="btn btn-primary" href="viewposts.html" role="button" target="-blank">view post</a>
                </div>
                <div class="col-lg-4">


                    <h3> Horse riding</h3>



                    <p>Riders can develop better reflexes and a sense of balance and coordination as they use their
                        entire body to guide and propel the horse forward. Riding also offers cardio benefits. Riding,
                        lifting saddles onto the back of a horse, mucking stalls, moving hay bales, etc., builds muscles
                        and physical strength</p><a class="btn btn-primary" href="viewposts.html" role="button"
                        target="-blank">view post</a>
                </div>
                <div class="col-lg-4"><img src="image/55.jpg">
                    <h3> Sports</h3>
                    <p>Sports are a crucial part of a student's growth and development. They help in the development of
                        mental health and physical fitness of the body. Through participation in sports and games, a
                        student gains various skills, experience and confidence that are helpful for developing their
                        personality</p><a class="btn btn-primary" href="viewposts.html" role="button"
                        target="-blank">view post</a>
                </div>
            </div>
        </div>
        <hr>

        <!-----postes----->
        <!---footer--->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h6>Stay connected</h6>
                    <ul>
                        <li><img class="social" style="width: 10px ; height: 10px;" src="image/facebook.png" alt="">
                            Facebook</li>
                        <li><img class="social" style="width: 10px ; height: 10px;" src="image/goog.png" alt=""> Google
                        </li>
                        <li><img class="social" style="width: 10px ; height: 10px;" src="image/twitter.png" alt="">
                            Twitter</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6> Help & Contact</h6>
                    <ul>
                        <li>Contact us</li>
                        <li>Resolution Center</li>
                        <li> Information Center</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6> Vision</h6>
                    <ul>
                        <li>hobbbies is funny</li>
                        <li>hobbbies is useful </li>
                        <li>hobbbies is important </li>
                    </ul>
                </div>

            </div>
        </div>
        <!---footer--->

        <!--login-->

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <!--login-->




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>







@endsection
