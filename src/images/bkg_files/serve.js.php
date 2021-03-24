(function () {
    var revDiv = document.querySelector('script[id="rc_661"]').parentNode;

    var appendRcel = function(url) {
        var rcel = document.createElement("script");
        rcel.id = 'rc_' + Math.floor(Math.random() * 1000);
        rcel.type = 'text/javascript';
        url += '&criteo=true';
        rcel.src = url;
        rcel.async = true;
        revDiv.appendChild(rcel);
    }

    var callRev_rc_661 = function(response) {
        var url = '//trends.revcontent.com/serve.js.php?w=103849&t=rc_661&c=1566735210871&width=1536&referer=&is_blocked=false';
        url += '&site_url=' + encodeURIComponent(window.location.href.substr(0,700));

        try {
            if(Array.isArray(response)) {
                response = revMap(response);
            } else {
                response = '';
            }
            var rcxhr = new XMLHttpRequest();
            rcxhr.onreadystatechange = function() {
                if (rcxhr.readyState == 4) {
                    var rcel = document.createElement("script");
                    rcel.type = 'text/javascript';
                    rcel.text = rcxhr.responseText;
                    rcel.async = true;
                    revDiv.appendChild(rcel);
                }
            }
            rcxhr.open("POST", url, true);
            rcxhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        rcxhr.withCredentials = true;
                        rcxhr.send('criteo=' + response);

            rcxhr.onerror = function() {
                appendRcel(url);
            }
        } catch(e) {
            appendRcel(url);
        }
    };

    
            var cs = document.createElement("script");
cs.type = 'text/javascript';
cs.src = "https://static.criteo.net/js/ld/publishertag.js";
cs.async = true;
revDiv.appendChild(cs);

if(typeof rc_criteo == 'undefined') {
    var rc_criteo = [];
}

cs.addEventListener('load', function() {
    callCriteo_rc_661();
});

function callCriteo_rc_661() {
    var adUnits = {
        "placements": [
            {
                             'slotid': 'rev-0',
                             'zoneid': 1210272,
                             'nativeCallback': function(){}
                         },        ]
    };

    Criteo.events.push(function() {
        Criteo.RequestBids(adUnits, callRev_rc_661, 500);
    });
}

function revMap(response) {
    var final = [];
    var c = 0;
    var dupe;

    response.sort(function(a,b){ return b.cpm - a.cpm });

    response.forEach(function(r, index) {
        dupe = false;

        if(rc_criteo.indexOf(r.id) != -1) {
            return;
        }

        final.forEach(function(f, i) {
            if(r.nativePayload.products[0].title == f.headline) {
                dupe = true;
            }
        });

        if (!dupe && final.length < 1) {

            rc_criteo.push(r.id);

            var headline = r.nativePayload.products[0].title;

            final[c] = {};
            final[c].headline         = headline.length > 80 ? headline.substring(0,80) + '...' : headline;
            final[c].price            = r.nativePayload.products[0].price;
            final[c].target_url       = r.nativePayload.products[0].click_url;
            final[c].image_url        = r.nativePayload.products[0].image.url;
            final[c].cpm              = r.cpm;
            final[c].pixels           = [];
            final[c].advertiser       = r.nativePayload.advertiser.description;
            final[c].optout_click_url = r.nativePayload.privacy.optout_click_url;
            final[c].optout_image_url = r.nativePayload.privacy.optout_image_url;

            r.nativePayload.impression_pixels.forEach(function(p, i) {
                final[c].pixels.push(p.url);
            });

            c++;
        }

    });
    return encodeURIComponent(JSON.stringify(final));
}    })();