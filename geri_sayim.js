// geri sayım

(function($) {
	
	$.fn.gerisayim=function(options) {
		
		var ayarlar= {'date' : null }; // tarih ayarı boş olarak ayarlanıyor.
		
		if(options) {
			
			$.extend(ayarlar,options)  // eğer bir tarih girilmişse ayara o tarih atanıyor
			
		}
		
		div=$(this);
		
		function geri_say() {
			
			hedefTarih=Date.parse(ayarlar['date']) / 1000;  // alarmın öteceği tarihi tarihi sayısal bir veriye, saniye cinsine çeviriyor

			simdikiTarih=Math.floor($.now()/1000); // bugünün tarihini saniye cinsinden alıyor, tam sayı için floor yapıyor
			
			saniye=hedefTarih-simdikiTarih;  //aradaki saniyeyi hesaplıyoruz.
			
			gunler=Math.floor(saniye / (60*60*24)); // o saniyenin kaç gün ettiği
			saniye -= gunler*60*60*24; // bir üstteki gün sayısını saniyeye çevirip oorjinal saniyeden çıkartıyoruz.
			
			saatler=Math.floor(saniye / (60*60));
			saniye -= saatler*60*60;
			
			dakikalar=Math.floor(saniye / 60);
			saniye -=  dakikalar*60;
			
			gunler=(String(gunler).length <2) ? '0'+gunler : gunler;  // tek basamak olursa başına 0 koyuyor.
			saatler=(String(saatler).length <2) ? '0'+saatler : saatler;
			dakikalar=(String(dakikalar).length <2) ? '0'+dakikalar : dakikalar;
			saniye=(String(saniye).length <2) ? '0'+saniye : saniye;
			
		div.find('.gun').text(gunler);
		div.find('.saat').text(saatler);
		div.find('.dakika').text(dakikalar);
		div.find('.saniye').text(saniye);
			
			}
			
			geri_say();	
			
			interval = setInterval(geri_say, 1000); // her saniye çalışsın.
	}
		
		
	}) (jQuery);