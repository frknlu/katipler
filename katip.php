<?php
include("baglanti.php");
header('X-XSS-Protection: 0');
ob_start();
session_start();
$getid=$_GET["oku"];
$bul=mysqli_query($con,"select * from makale where id='$getid'");
$cek=mysqli_fetch_array($bul);
$hit=$cek["hit"]+1;
mysqli_query($con,"UPDATE makale SET hit='$hit' where id='$getid'");			
$yorumsayisi=mysqli_query($con,"select * from yorumlar where makale_id=$getid");
$rowcountyrm=mysqli_num_rows($yorumsayisi);
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="GOOGLEBOT" content="INDEX, FOLLOW">
<meta name="GOOGLEBOT" content="SNIPPET">
<meta name="GOOGLEBOT" content="ARCHIVE">
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta name="ROBOTS" content="ARCHIVE">
<meta name="robots" content="noodp, noydir">
<meta content="0" http-equiv="EXPIRES">
<link rel="alternate" hreflang="Tr" href="www./">
<meta name="Resource-type" content="Document">
<meta name="document-class" content="Published">
<meta name="document-classification" content="Design">
<meta name="document-rights" content="Copyrighted Work">
<meta name="document-distribution" content="Global">
<meta name="document-state" content="Static">
<meta name="revisit-after" content="1 days">
<meta name="author" content="www.sherlockmedya.com">
<meta name="content-language" content="tr">
<meta http-equiv="reply-to" content="info@katipler.name.tr">
<meta name="Reply-to" content="info@katipler.name.tr">
<meta name="copyright" content="2015 ©  All rights reserved">
<!-- Seo 2018-->
<meta name="description" content="<?php echo $cek["baslik"]; ?>,Zabıt Katipleri Portalı, katipler.name.tr,On Parmak Sayfası, Memur Alımları, Kpss, Aöf, is ilanları, Uyap, Mahkeme Kararları, Memur Haberleri">
<meta name="keywords" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<meta name="Dmoz" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<meta name="Altavista" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<meta name="Scooter" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<meta name="abstract" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<meta name="classification" content="zabıt katipleri portalı, katipler name tr,2017 2018 yılları zabıt katibi alımı,icra katipleri kadro derecesi en fazla kaça düşebilir?,icra katipleri yeşil pasaport alabilir mi?,katiplerin pasaport alma hakkı var mı?,zabıt katipleri 3. dereceye düşebilir mi,zabıt katipleri kadro derecesi 3 e nasıl düşürülür,zabıt katipleri yeşil pasaport alabilir mi?,2018 adliye personel alımı şartları,2018 zabıt katibi alım ilanı,2018 zabıt katibi alımları hangi kpss sınavına göre yapılacak,adalet bakanlığı mübaşir teknisyen şoför alımları 2018,adalet bakanlığı personel alımı 2018,adalet bakanlığı personel alımı yaş şartı 2018,adliyelere göre zabıt katibi dağılımı 2018,hangi adliyelere ne kadar personel alınacak 2018,sözleşmeli zabıt katipliği ve mübaşirlik başvuruları başladı mı? 2018,zabıt katipliği personel alımı adliyeler,zabıt katipliği şartları 2018,adalet bakanlığı birden fazla unvana personel alımı için başvuru yapılabilir mi?,adliye zabıt katipliği ve icraya birlikte başvuru yapılabilir mi?,hem icra hemde adliye katipliğine başvurulabilir mi?,icra katipliğine başvuranlar diğer alımlara girebilir mi?,sözleşmeli zabıt katipliği ve icra katipliğine başvuru kabul ediliyor mu?,adliyeler icra katibi alımı 2018,icra daireleri katiplik başvuruları 2018,icra katibi alımı başvuru formu başvuru süresi 2018,icra katibi alınan iller ve komisyonlar 2018,icra katipliğine başvuranlar zabıt katipliğine başvurabilir mi?,icra katipliğinin zabıt katipliğinden farkları nelerdir?,2018 infaz koruma memuru alımı başvuru tarihi kadro sayıları,7467 gardiyan alımı başvuru tarihi ve kadro sayıları 2018,adalet bakanlığı cezaevleri teknisyen,aşçı,ceza infaz kurumu katipliği başvuruları 2018,ceza ve tevfik evleri infaz koruma memuru alımı 2018,cezaevi gardiyan alımı ilanı 2018,cezaevi infaz koruma memuru alınan iller 2018,cezaevi infaz korumu memurluğu başvuru formu 2018,cezaevleri 7467 personel alımı başvuru formu,cezaevleri personel alımı son tarihi ne zaman 2018,kaloriferci alımı ilanı 2018,kaloriferci alımı kpss şartı kaç puan 2018,şoför,2018 zabıt katibi alımı ilanı,abdulhamit gül personel alımı açıklaması 2018,adalet bakanlığı 2018 personel alımı sınavları ve başvuruları,adliye zabıt katipliği sınavları 2018,infaz koruma memurluğu sınavları 201,zabıt katipliği sınavları ne zaman 2018,adalet bakanı abdulhamit gül eğitim açıklaması,adalet bakanlığı çalışanlarına hizmet içi eğitim 2018,adalet bakanlığı personel eğitimleri 2018,zabıt katipleri eğitimi 2018">
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAwJtoA19X6AI+J8QBIPegAwr/4AJWP8QDFwvgANSrmAIB57wA4LeYAurfzAF1T6wD09e4AeXLtAGJZ6wBKQOkAk4zyAEtA6QBMQuYAZFzrAExD6QCVj/IATUPpAH128AAgFNwAT0bpAFBG6QCAefAAOC3nAFFG6QA+NNgAQzvJAD0z5wBzbNwAb2buANDO+QCine8AQTbnACkd5QBzbO4AHBK8AHRs7gAuIuIARjznAC4j5QB3b+4AGAzgADEm5QANArEAZFzsAPf3/gBWTdsAUknqAAAAkQCblfMAVEvnAP39/gBVTOoAhn/xAD4z6ADo5/wAiYPrAKCb8wBZT+oARDnoAI6I8QBeVeoAeXPgAEY86ADY1/oASkDiAEo/6AB8de8Ax8T4AGhg5wBnX+0AaF/tAGpi7QAFAIkAEwfBAD4z4AACAJsAcGjtACgc5ABZT+sAo570AI2H7wAuIuQAXlXrADMp1QCppPQAYVjrALOyzQDz8/0ASj/pAExC6QBNQukAlpHyAH948ABPRekANyznADwy3gA6L+cAa2LuACcb2QCFfvAAbmXuAEA15wBwaO4AioTwAF1U6QC+uvcAFg+KAKyn9QCTjvMAZFvsABwP4wB+d+4Ar6r1AJeR8wD5+f4AUkjqAJ2X8wBvZ+wAV07qAKCa8wCHgfEAFQnJAFhO6gBANegAW1HqAHZv6QCNh/EARjvoANjW+gB4ce8AST7oAEpA5QDDwPgAe3TvADQo5gB+d+8ABwDcAGlh7QBUSugAbGTtALWw9gBwaeEA////AG9n7QBXTusAJxvkAKKd9ABbUesAQzjpAKWg9ABdVOsAdm/qAI2H8gCPie8AYFfrAGFX6wAcENYAYlrrAE5E6QBPROkAmZPyADku5wAMANQAOzDkAMzJ+QCFfuoAJxvlAHFq7gB0be4ApaD1AC8j4gDBvvQAY1rsAE9E6gBRR+oAs6/1AFNK6gDm5fwAVU3qAFdO5ACHgesAVk3qAIaA8QBXTeoAPzToAFlQ6gAaEL0AQjfoAFxT6gBEOugARTroAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADE7AWVCJkMIOE6NuN0YeKHBPaLAvCcEWPwuCuxorqQAwoi5ThG9Jm7gUOXkRmmYqf46LlJSUBLWGmIUWAyUcV6h1lJSSl2SBvr1sA0AgZCwYlJRJdGtEXhZgDwOWOwcmPZSUp2ZAiF+zpaTEVEUmjQqUeKzDRxYdNLYZmZuUlKGxlF2MY3k5gL+/thABlJTEJJSUA72cW7Jzc7J8MXitWrmUlLW0S2dqIpWRjxdsOaRlBpSUNliVKSknAq5STUugMxIjlJQ8dq+KqmIbSC1sTB9KQgIBMji3cWmEbTpih3s1k50Niwi8nhWmd3JBfgiDXFFDq1YFNn2YVT56YZ+6IQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
  
	
    <title><?php echo $cek["baslik"]; ?> - Katipler.name.tr</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="css/katip.css" rel="stylesheet">
	

  </head>
  <body>
  <?php include("view/header.php"); ?>
    <div class="container">
	<br>
      <div class="row">
        <div class="col-md-8">  
		  	<?php
	$aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
);

					
					$ay = $aylar[date('m', strtotime($cek["tarih"])) - 1];
echo'

<div class="col-md-12 post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <strong><a href="katip.php?oku='.$cek["id"].'" class="post-title">'.$cek["baslik"].'</a></strong></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 post-header-line">
                            <span class="glyphicon glyphicon-calendar">
                            </span>Tarih: '.date('d ', strtotime($cek["tarih"])). $ay .date(' Y', strtotime($cek["tarih"])).' | <span class="glyphicon glyphicon-comment"></span>Yorum: '.$rowcountyrm.' | <i class="icon-share"></i>'.$cek["hit"].' Görüntülenme | <span class="glyphicon glyphicon-tags">
                                </span>Etiket : 
								<a href="#"><span class="label label-info">'.$cek["etiket"].'</span></a> 

                        </div>
                    </div>
                    <div class="row post-content">
                        <div class="col-md-12">
                            <p>
							<a href="katip.php?oku='.$cek["id"].'">
                                <img style="display: block;height: auto;max-width: 100%;float: right;" src="'.$cek["img_resim"].'" alt="" class="img-responsive">
                            </a>
                               '.$cek["icerik"].'
                            </p>
                        </div>
                    </div>
                </div>

';
	?>
	<!-- Yorumlar -->
	<style>
	.nokta{
	border-bottom: 1px dashed #B1A074;
    margin: -10px 2px 1px 0px;
	}
	</style>
<?php
echo '<div style="margin-bottom:10px; padding:0px; text-decoration:underline; color:#09F; font-size:14px; font-weight:bold; font-family:Arial;">Yapılan Yorumlar ('.$rowcountyrm.')</div>';
	
## Sayfa Degiskeninin alalim.
	$sayfa		=	@$_GET["s"];
	## Sayfa Boşsa yada sayı değilse,
	if(empty($sayfa) || !is_numeric($sayfa)){
		$sayfa	=	1;
	}

	## Kaçar Tane Gözükecek
	$kacar		=	10;
	## Kayıt Sayısı
	$ksayisi	=	mysqli_num_rows(mysqli_query($con,"SELECT * FROM yorumlar WHERE makale_id=$getid"));
	## Sayfa Sayısı
	$ssayisi	=	ceil($ksayisi/$kacar);
	## Nereden Başlayacak
	$nereden	=	($sayfa*$kacar)-$kacar;

	## Verileri Çekelim
	$bul=mysqli_query($con,"select * from yorumlar WHERE makale_id=$getid order by tarih ASC limit $nereden,$kacar");
		
		while($cek=mysqli_fetch_array($bul)){
					extract($cek);
			
echo '
	<div style="height:auto; margin-bottom:4px; color:#333; font-size:12px; font-family:Arial;background-color: #FAF5D3;">
	<font size="2"><b>'.$cek['yazan'].'</b> <i>diyor ki;</i></font>
	<font style="float:right;">'.$cek['tarih'].'</font><br /><br />
	<div class="nokta">		</div>
	'.$cek['yorum'].'<br /><br /></div>';

		}
		
	## Sayfaları Yazdıralım
	for ($i=1; $i<=$ssayisi; $i++){
		echo "<span style='text-align:center;margin:5px; border:1px dotted orange'><a href='katip.php?oku=$getid&s={$i}'";
		if($i == $sayfa){
			echo "class='aktif'";
		}
		echo ">{$i}</a></span>";
	}
	
	?>


<!-- Yorum yazma formu -->
<form action="katip.php?adim=yorumonay&id=<?php echo $getid; ?>" method="post">
<table border="1" bordercolor="#CCCCCC" style="border-collapse:collapse; color:#333; font-size:12px; font-family:Arial; margin-bottom:25px;">
  <tr>
    <td colspan="2" bgcolor="#F2F2F2"><h3>Sizde bir yorum yazın &raquo;</h3></td>
    </tr>
  <tr>
    <td width="99" bgcolor="#F2F2F2"><b>Ad - Soyad</b></td>
    <td width="285"><input name="txt_adsoyad" type="text" size="25" required> <font color="red">*</font></td>
  </tr>
  <tr>
    <td bgcolor="#F2F2F2"><b>E-Mail</b></td>
    <td>
    <input name="txt_email" type="email" size="25" required> <font color="red">*</font>
    <br /><font size="1">E-Mail adresiniz gösterilmeyecek!</font>
    </td>
  </tr>
  <tr>
    <td bgcolor="#F2F2F2"><b>Yorum</b></td>
    <td>
    <textarea name="txt_yorum" cols="30" rows="4" required></textarea>
	<div id="displayDivId" style="display: none;">
	<input name="txt_id" type="text" value="<?php echo $getid?>" required/></div>
    <br /><font size="1">En fazla <font color="red">300</font> karakterlik bir yorum yazabilirsiniz.</font>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" style="float:right;" value="Yorumu Gönder" class="btn btn-warning" /></td>
    </tr>
</table>
</form>
<?php
$adim = $_GET['adim']; 
switch($adim){ 
case "yorumonay":
$yorum_id = str_replace("'", "\'", $_POST['txt_id']);
$yorum_adsoyad = str_replace("'", "\'", $_POST['txt_adsoyad']);
$yorum_email   = str_replace("'", "\'", $_POST['txt_email']);
$yorum_yorum   = str_replace("'", "\'", $_POST['txt_yorum']);
$tarih = date('Y-m-d H:i:s');

if(($yorum_adsoyad == "") or ($yorum_email == "") or ($yorum_yorum == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=katip.php?oku='.$yorum_id.'">';
}else{
	$sql8="INSERT INTO yorumlar (makale_id,yazan,mail,tarih,yorum) VALUES ('$yorum_id','$yorum_adsoyad','$yorum_email','$tarih','$yorum_yorum')";
$yorum_kaydet = mysqli_query($con,$sql8);
	if($yorum_kaydet){ 
		echo '<meta http-equiv="refresh" content="0;URL=katip.php?oku='.$yorum_id.'">';
	}else{ 
		echo '<script type="text/javascript">alert("Yorum eklenemedi, bir hata oluştu!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=katip.php?oku='.$yorum_id.'">';
	}
}
break;
}
?>		  
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Ara</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Arama...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Sonuç!</button>
                </span>
              </div>
            </div>
          </div>
          <!-- Categories Widget -->
         <?php include("view/kategori.php"); ?>
          <!-- Side Widget -->
		  <?php include("view/widget.php"); ?>   
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
<?php include("view/footer.php"); ?>
  </body>
</html>