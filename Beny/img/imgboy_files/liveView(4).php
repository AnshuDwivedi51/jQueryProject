
                        try
                        {
                            var linksArray = '  https://live.primis.tech/content/video/hls/hls.0.12.4_3.min.js  https://live.primis.tech/content/prebid/prebidVid.6.18.0_8.min.js   https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032322D30362D32305F31347D7B7331363739393431397D7B433135397D7B536157316E64584975593239747D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583630387D7B593334327D7B66327D7B4C31323431307DFEFE&userIpAddr=116.72.10.37&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F102.0.0.0+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&sdkv=&isSinglePageFloatSupport=0&csuuid=62b0596cefbaf&debugInfo=16799419_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=16799419&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed2b2aqhjgxunw&secondaryContent=&x=608&y=342&pubUrl=https%3A%2F%2Fimgur.com%2FrB0o6Zi&contentNum=1&flow_closeBtn=1&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=bl&flow_horizontalOffset=0&flow_bottomOffset=51&impGap=2&flow_width=400&flow_height=225&videoType=flow&gdpr=0&gdprConsent=&contentFeedId=&geoLati=21.1888&geoLong=72.8293&vpTemplate=12410&flowMode=seenboth&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent=&subId=imgur.com'.split(' ');

                            for(var l = 0; l < linksArray.length; l++)
                            {
                                if(linksArray[l].length > 10)
                                {
                                    var sc = document.createElement('script');
                                    sc.type = 'text/javascript';
                                    sc.async = false;
                                    sc.src = linksArray[l];
                                    document.head.appendChild(sc);
                                }
                            }
                        }
                        catch(e)
                        {
                            document.write('<script type="text/javascript" src="https://live.primis.tech/content/video/hls/hls.0.12.4_3.min.js">\x3C/script><script type="text/javascript" src="https://live.primis.tech/content/prebid/prebidVid.6.18.0_8.min.js">\x3C/script><script type=' + "'" + 'text/javascript' + "'" + ' language=' + "'" + 'javascript' + "'" + ' src="https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032322D30362D32305F31347D7B7331363739393431397D7B433135397D7B536157316E64584975593239747D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583630387D7B593334327D7B66327D7B4C31323431307DFEFE&userIpAddr=116.72.10.37&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F102.0.0.0+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&sdkv=&isSinglePageFloatSupport=0&csuuid=62b0596cefbaf&debugInfo=16799419_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=16799419&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed2b2aqhjgxunw&secondaryContent=&x=608&y=342&pubUrl=https%3A%2F%2Fimgur.com%2FrB0o6Zi&contentNum=1&flow_closeBtn=1&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=bl&flow_horizontalOffset=0&flow_bottomOffset=51&impGap=2&flow_width=400&flow_height=225&videoType=flow&gdpr=0&gdprConsent=&contentFeedId=&geoLati=21.1888&geoLong=72.8293&vpTemplate=12410&flowMode=seenboth&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent=&subId=imgur.com">\x3C/script>');
                        }
                        