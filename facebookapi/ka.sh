base_path="/home/wwwroot/lnmp5.6/domain";
while read line
do
    path="${base_path}/${line}/web"
    templates="${path}/includes/templates/zbx_ka01"
    cp -R -f conversions ${path}
    cp -f jscript_ServerEvent.js ${templates}/js
    cp -f html_header.php ${templates}/common
    cp -f slide1_zp.jpg ${templates}/images/banners
    echo ${path}
done<webcopy.txt