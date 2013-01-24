<?php if (is_singular()): ?>

<div class="content-share">
<!-- Place this tag where you want the +1 button to render. -->
    <div class="g-plusone" data-size="tall" data-href="<?php the_permalink(); ?>"></div>

    <!-- Place this tag after the last +1 button tag. -->
    <script type="text/javascript">
        (function () {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
    </script>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="450"
         data-show-faces="true"></div>

    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>"
       data-via="akarmenia" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
    <script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>

</div>

<?php endif; ?>
