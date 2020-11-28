chet = 0;
hour_site = 0;
minutes_site = 0;
seconds_site =  0;
chet_time = 0;
let zrada = 0;
var  month  = ["Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря"]
function time(){
var date = new Date();
        var Year = date.getFullYear(),
day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate(),
            hours = date.getHours() < 10 ? '0' + date.getHours() : date.getHours(),
            minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes(),
            seconds =  date.getSeconds() < 10 ? '0' + date.getSeconds(): date.getSeconds();
        var time = day + '-'+month[date.getMonth()]+'-'+Year+'  '+hours+':'+minutes+':'+seconds;
		chet_time = chet_time+1;
if (chet_time == 30 )
{
if (minutes_site == 59) { hour_site = hour_site+1; minutes_site = 0}	
if (seconds_site == 59) { minutes_site = minutes_site+1; seconds_site = 0}
seconds_site = seconds_site +1;

chet_time = 0;
}
var time_site =(hour_site < 10 ? '0' + hour_site: hour_site) + ":"+  (minutes_site < 10 ? '0' + minutes_site: minutes_site) + ":"+ (seconds_site < 10 ? '0' + seconds_site: seconds_site);
onclick = function() {
chet = chet +1;
  };
        $('pre#Counter').text("Время:\n" +time + "\nКоличество кликов на сайте:\n" + chet + "\nВремя на сайте:\n" + time_site);
			 if (zrada == 1) $('p#evil').text("Время:\n" +time);
			 else $('p#evil').text("\nВремя:\n" +day + '-'+month[date.getMonth()]+'-'+Year);
}
    setInterval(function(){
        time();
    },30);