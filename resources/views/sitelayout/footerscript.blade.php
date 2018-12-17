

      <!-- jQuery -->
        <script src="{{URL::asset('js/jquery.min.js')}}"></script>'

        <!-- BOOTSTRAP -->
        <script src="{{URL::asset('js/bootstrap/js/bootstrap.min.js')}}"></script>'

        <!-- jQuery Easing -->
        <script src="{{URL::asset('js/jquery.easing-1.3.min.js')}}"></script>'

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="{{URL::asset('js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>'
        <script type="text/javascript" src="{{URL::asset('js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>'
        <script type='text/javascript' src='js/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min8a54.js?ver=1.0.0'></script>
        <script type="text/javascript" src="{{URL::asset('js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>'
        <script type="text/javascript" src="{{URL::asset('js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>'
        <script type="text/javascript" src="{{URL::asset('js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>'
        <script>
            $(document).ready(function() {
                if ($("#rev-slider").revolution != undefined) {
                    $("#rev-slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "hephaistos",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "hephaistos",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 20,
                                v_offset: 30,
                                space: 5,
                                tmp: ''
                            }
                        },
                        gridwidth: 1230,
                        gridheight: 720
                    });
                }
            });
        </script>

        <!-- Parallax -->
        <script src="{{URL::asset('js/parallax/jquery.parallax-1.1.3.js')}}"></script>'
        <script src="{{URL::asset('js/parallax/setting.js')}}"></script>'

        <!-- Owl Carousel -->
        <script src="{{URL::asset('js/owlcarousel/js/owl.carousel.min.js')}}"></script>'
        <script src="{{URL::asset('js/owlcarousel/js/setting.js')}}"></script>'

        <!-- PrettyPhoto -->
        <script src="{{URL::asset('js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>'
        <script src="{{URL::asset('js/prettyPhoto/js/setting.js')}}"></script>'

        <!-- Masonry -->
        <script src="{{URL::asset('js/masonry/js/masonry.min.js')}}"></script>'
        <script src="{{URL::asset('js/masonry/js/masonry.filter.js')}}"></script>'
        <script src="{{URL::asset('js/masonry/js/setting.js')}}"></script>'

        <!-- Custom JavaScript for this theme -->
        <script src="{{URL::asset('js/custom.js')}}"></script>'

        <!-- Nicescroll -->
        <script src="{{URL::asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>'
        <script src="{{URL::asset('js/nicescroll/settings.js')}}"></script>'

        <!-- Theme option-->
        <script src="{{URL::asset('js/style-switcher/js/style-switcher.js')}}"></script>'

  </body>
</html>
