<script>(function () {
        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields) {
            for (var j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField);
            }
        }
    })();</script>
<script type='text/javascript' id='tawc-deals-js-extra'>var tawcDeals = {
        "l10n": {
            "days": "d",
            "hours": "h",
            "minutes": "m",
            "seconds": "s"
        }
    };</script>
<script type='text/javascript' id='shortcodes-js-extra'>var helendoShortCode = {
        "productsCarousel": {
            "helendo-product-carousel-60491529773a2": {
                "nav": true,
                "dot": false,
                "dot_mobile": true,
                "autoplay": false,
                "autoplaySpeed": 5000,
                "speed": 1000,
                "show": 4,
                "scroll": 1,
                "nav_size": "",
                "m_show": 2
            }
        },
        "imageCarousel": {
            "helendo-image-carousel-60491529db510": {
                "slide": 5,
                "scroll": 5,
                "dot": false,
                "nav": true,
                "autoplay": true,
                "speed": 6000,
                "ic_font_size": "",
                "m_dot": true,
                "m_show": 2
            }
        },
        "days": "days",
        "hours": "hours",
        "minutes": "minutes",
        "seconds": "seconds"
    };</script>
<script defer src="{{ asset('frontend/js/autoptimize_06d02c06c613ff2310b45ac334927834.js') }}"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/engine1/wowslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/engine1/script.js') }}"></script>
@yield('scripts')
