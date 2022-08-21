<?php 
    include 'inc/header.php';
    include 'inc/nav-left.php'; 
?>

        <!-- main content -->
        <div class="main-content bg-lightblue theme-dark-bg right-chat-active">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="middle-wrap">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                                <a href="settings.php" class="d-inline-block mt-2"><i class="ti-arrow-left font-sm text-white"></i></a>
                                <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Contact Information</h4>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 mb-0">
                             

                            <form action="#">
                                 

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Country</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">City</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Address</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Pincode</label>
                                            <input type="text" name="comment-name" class="form-control">
                                        </div>        
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div id="map" class="rounded-3 overflow-hidden" style="height: 200px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(_http_/maps.gstatic.com/mapfiles/openhand_8_8.php), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div></div></div><div style="width: 50px; height: 50px; overflow: hidden; position: absolute; left: -25px; top: -50px; z-index: 0;"><img alt="" src="images/map-marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 50px; height: 50px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -58, -252);"><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3766!3i2458!4i256!2m3!1e0!2sm!3i546272108!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=96024" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3768!3i2458!4i256!2m3!1e0!2sm!3i546272120!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=67711" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3766!3i2457!4i256!2m3!1e0!2sm!3i546272120!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=2892" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3767!3i2457!4i256!2m3!1e0!2sm!3i546272120!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=68417" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3768!3i2457!4i256!2m3!1e0!2sm!3i546272120!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=2871" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3767!3i2458!4i256!2m3!1e0!2sm!3i546272120!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=2186" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3765!3i2458!4i256!2m3!1e0!2sm!3i546272096!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=85807" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i3765!3i2457!4i256!2m3!1e0!2sm!3i546272108!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC52Om9uLHMudDoxfHMuZTpsLnQuZnxwLmM6I2ZmNDQ0NDQ0LHMudDoxOHxwLnY6b2ZmLHMudDoxOXxwLnY6b2ZmLHMudDoyMHxwLnY6b2ZmLHMudDoyMXxwLnY6b2ZmLHMudDoyMXxzLmU6bC50fHAudjpvZmYscy50OjV8cC5jOiNmZmYyZjJmMixzLnQ6ODF8cC52OnNpbXBsaWZpZWQscy50OjJ8cC52Om9mZnxwLmM6I2ZmY2VlOWRlfHAuczoyfHAudzowLjgwLHMudDozN3xzLmU6Zy5mfHAudjpvZmYscy50OjQwfHAudjpvbixzLnQ6M3xwLnM6LTEwMHxwLmw6NDUscy50OjQ5fHAudjpzaW1wbGlmaWVkLHMudDo0OXxzLmU6Zy5mfHAudjpvbnxwLmM6I2ZmZjVkNmQ2LHMudDo0OXxzLmU6bC50fHAudjpvZmYscy50OjQ5fHMuZTpsLml8cC5oOiNmZjAwMDB8cC52Om9uLHMudDo3ODV8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6Nzg1fHMuZTpsLml8cC52Om9ufHAuaDojMDA2NGZmfHAuZzoxLjQ0fHAubDotM3xwLnc6MS42OSxzLnQ6NTB8cC52Om9uLHMudDo1MHxzLmU6bC50fHAudjpvZmYscy50OjUwfHMuZTpsLml8cC52Om9mZixzLnQ6NTF8cC52Om9uLHMudDo1MXxzLmU6bC50fHAudjpzaW1wbGlmaWVkfHAudzowLjMxfHAuZzoxLjQzfHAubDotNXxwLnM6LTIyLHMudDo0fHAudjpvZmYscy50OjY1fHAudjpvbnxwLmg6I2ZmMDAwMCxzLnQ6MTA1OXxwLnY6c2ltcGxpZmllZHxwLmg6I2ZmMDA0NSxzLnQ6MTA1OHxwLnY6b258cC5oOiMwMGQxZmYscy50OjEwNTh8cy5lOmwudHxwLnY6c2ltcGxpZmllZCxzLnQ6MTA1N3xwLnY6c2ltcGxpZmllZHxwLmg6IzAwY2JmZixzLnQ6MTA1N3xzLmU6bC50fHAudjpzaW1wbGlmaWVkLHMudDo2fHAuYzojZmY0NmJjZWN8cC52Om9uLHMudDo2fHMuZTpnLmZ8cC53OjEuNjF8cC5jOiNmZmNkZTJlNXxwLnY6b24!4e0&amp;key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;token=96730" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="" role="button" tabindex="0" style="width: 50px; height: 50px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -25px; top: -50px; z-index: 0;"><img alt="" src="../../maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 50px; height: 50px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="height: 18px; width: 18px;"></button></div><div></div><div></div><div></div><div></div><div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=-33.86938,151.104&amp;z=12&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="../../maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2021 Google</span></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.php" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@-33.86938,151.104,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2021 Google</div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 202px; top: 10px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data</div><div style="font-size: 13px;">Map data ©2021 Google</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div></div></div></div>
                                        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;callback=mapinitialize" type="text/javascript"></script>
                                        <script type="text/javascript">
                                            function mapinitialize() {
                                                var latlng = new google.maps.LatLng(-33.86938,151.104000);
                                                var myOptions = {
                                                    zoom: 12,
                                                    center: latlng,
                                                    scrollwheel: false,
                                                    scaleControl: false,
                                                    disableDefaultUI: true,
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                    // Google Map Color Styles
                                                    styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"color":"#cee9de"},{"saturation":"2"},{"weight":"0.80"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f5d6d6"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#0064ff"},{"gamma":"1.44"},{"lightness":"-3"},{"weight":"1.69"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"},{"weight":"0.31"},{"gamma":"1.43"},{"lightness":"-5"},{"saturation":"-22"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#ff0045"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#00d1ff"}]},{"featureType":"transit.station.bus","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#00cbff"}]},{"featureType":"transit.station.rail","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"weight":"1.61"},{"color":"#cde2e5"},{"visibility":"on"}]}]
                                                };
                                                var map = new google.maps.Map(document.getElementById("map"),myOptions);
                                                
                                                var image = "images/map-marker.png";
                                                var image = new google.maps.MarkerImage("images/map-marker.png", null, null, null, new google.maps.Size(50,50));
                                                var marker = new google.maps.Marker({
                                                    map: map, 
                                                    icon: image,
                                                    position: map.getCenter()
                                                });
                                                
                                                var contentString = '<b>Office</b><br>Streetname 13<br>50001 Sydney';
                                                var infowindow = new google.maps.InfoWindow({
                                                    content: contentString
                                                });
                                                            
                                                google.maps.event.addListener(marker, 'click', function() {
                                                  infowindow.open(map,marker);
                                                });
                                                                
                                                    
                                            }
                                            mapinitialize();
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0 mt-2 ps-0">
                                    <a href="#" class="bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">Save</a>
                                </div>
                            </form>
                            </div>
                        </div>
                        <!-- <div class="card w-100 border-0 p-2"></div> -->
                    </div>
                </div>
                 
            </div>            
        </div>
        <!-- main content -->

                <!-- right chat -->
        <div class="right-chat nav-wrap mt-2 right-scroll-bar">
            <div class="middle-sidebar-right-content bg-white shadow-xss rounded-xxl">

                <!-- loader wrapper -->
                <div class="preloader-wrap p-3">
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer mb-3">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                </div>
                <!-- loader wrapper -->

                <div class="section full pe-3 ps-4 pt-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">CONTACTS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-8.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin Seary</a>
                            </h3>
                            <span class="badge badge-primary text-white badge-pill fw-500 mt-0">2</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-7.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Victor Exrixon</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-6.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Surfiya Zakir</a>
                            </h3>
                            <span class="bg-warning ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-5.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Goria Coast</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-4.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin Seary</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">4:09 pm</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-3.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">David Goria</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 days</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-2.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Seary Victor</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="images/user-12.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Ana Seary</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="section full pe-3 ps-4 pt-4 pb-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">GROUPS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Studio Express</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 min</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany Design</a>
                            </h3>
                            <span class="bg-warning ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-mini-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">De fabous</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                    </ul>
                </div>
                <div class="section full pe-3 ps-4 pt-0 pb-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">Pages</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany Seary</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Entropio Inc</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>

<?php include 'inc/footer.php'; ?>