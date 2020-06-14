

<!DOCTYPE html>
<html>
<head>
	<style>
	.nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  text-align: center;
  background-color: #333;
}

.nav li {
  display: inline-block;
  border-right:1px solid white;
}

li:last-child {
  border-right: none;
  
}


li a {
  display: block;
  color: white;
  
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
}
.active {
  background-color: #4CAF50;
}

</style>
	<link rel="stylesheet" href="cstyle.css" />
<script>
function populate(s1,s2){
var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);

s2.innerHTML = "";
 
if(s1.value == "andhra-pradesh"){
var optionArray = ["|","Anantapur|Anantapur","Chittoor|Chittoor","EastGodavari|East Godavari ","Guntur|Guntur","Kadapa|Kadapa","Krishna|Krishna ","Kumool|Kumool","Prakasam|Prakasam ","Nellore|Nellore","Srikakulam|Srikakulam","Visakhapatnam|Visakhapatnam","Vizianagaram|Vizianagaram","WestGodavari|West Godavari"];
}else if(s1.value == "arunachal-pradesh"){
var optionArray = ["|","Anjaw | Anjaw","Changlang | Changlang ","East Kameng East | Kameng ","East Siang | East Siang ","Kamle | Kamle ","Kra Daadi | Kra Daadi ","Kurung Kumey | Kurung Kumey ","Lepa-Rada | Lepa-Rada ","Lohit | Lohit ","Longding | Longding ","Lower Dibang Valley | Lower Dibang Valley ","Lower Siang | Lower Siang ","Lower Subansiri | Lower Subansiri ","Namsai | Namsai ","Pakke-Kessang | Pakke-Kessang ","Papum Pare | Papum Pare ","Shi Yomi | Shi Yomi ","Siang |	Siang ","Tawang | Tawang ","Tirap | Tirap ","Upper Dibang Valley | Upper Dibang Valley ","Upper Siang | Upper Siang ","Upper Subansiri | Upper Subansiri ","West Kameng | West Kameng ","West Siang | West Siang"];
} else if(s1.value == "assam"){
var optionArray = ["|","Baksa| Baksa","Barpeta| Barpeta","Bishwanath| Bishwanath","Bongaigaon| Bongaigaon","Cachar| Cachar","Charaideo| Charaideo","Chirang| Chirang","Darrang| Darrang","Dhemaji| Dhemaji","Dhubri| Dhubri","Dibrugarh| Dibrugarh","Dima Hasao| Dima Hasao","Goalpara| Goalpara","Golaghat| Golaghat","Hailakandi| Hailakandi","Hojai| Hojai","Jorhat| Jorhat","Kamrup| KamrupKamrup Metropolitan| Kamrup Metropolitan","Karbi Anglong| Karbi Anglong","Karimganj| Karimganj","Kokrajhar| Kokrajhar","Lakhimpur| Lakhimpur","Majuli| Majuli","Morigaon| Morigaon","Nagaon| Nagaon","Nalbari| Nalbari","Sivasagar| Sivasagar","South| Salmara","South| Salmara","Sonitpur | Sonitpur","Tinsukia| Tinsukia","Udaiguri| Udaiguri","West Karbi Anglong| West Karbi Anglong"];
}else if(s1.value == "bihar"){
var optionArray = ["|","Araria|Araria ","Arwal|Arwal ","Aurangabad| Aurangabad ","Banka|Banka ","Begusarai| Begusarai ","Bhagalpur| Bhagalpur ","Bhojpur| Bhojpur ","Buxar| Buxar ","Danang|Danang ","East Champaran | East Champaran ","Gaya|Gaya ","Gopalganj| Gopalganj ","Jamui|Jamui ","Jehanabad|Jehanabad ","Kaimur|Kaimur ","Katihar|Katihar ","Khagaria|Khagaria "," Kishanganj| Kishanganj "," Lakhisarai|LakhisaraiMadhepura|Madhepura ","Madhubani|Madhubani ","Munger|Munger ","Muzaffarpur|Muzaffarpur ","Nalanda|Nalanda ","Nawada|Nawada ","Patna|Patna ","Purnia|Purnia ","Rohtas|Rohtas ","Saharsa|Saharsa ","Samastipur|Samastipur ","Saran|Saran ","Sheikhpura| Sheikhpura ","Sheohar| Sheohar ","Sitamarhi| Sitamarhi ","Siwan|Siwan ","Supaul|Supau ","Vaishali|Vaishali ","West Champaran| West Champaran"];

}else if(s1.value == "gujarat"){
var optionArray = ["|","Ahmedabad| Ahmedabad ","Amreli| Amreli ","Anand| Anand ","Aravalli| Aravalli ","Banaskantha| Banaskantha ","Bharuch| Bharuch ","Bhavnagar| Bhavnagar ","Botad| Botad ","Chhota Udepur| Chhota Udepur ","Dahod| Dahod ","Dang| Dang ","Devbhoomi Dwarka | Devbhoomi Dwarka ","Gandhinagar| Gandhinagar ","Gir Somnath| Gir Somnath ","Jamnagar| Jamnagar ","Junagadh| Junagadh ","Kheda| Kheda ","Kutch| Kutch ","Mahisagar| Mahisagar ","Mehsana| Mehsana ","Morbi| Morbi ","Narmada| Narmada ","Navsari| Navsari ","Panchmahal| Panchmahal ","Patan| Patan ","Porbandar| Porbandar ","Rajkot| Rajkot ","Sabarkantha| Sabarkantha ","Surat| Surat ","Surendranaga| Surendranagar ","Tapi| Tapi ","Vadodara| Vadodara ","Valsad| Valsad"];
}else if(s1.value == "haryana"){
var optionArray = ["|","Ambala| Ambala ","Bhiwani | Bhiwani ","Charkhi Dadri | Charkhi Dadri ","Faridabad| Faridabad ","Fatehabad| Fatehabad "," Gurugram| Gurugram ","Hissar | Hissar ","Jhajjar| Jhajjar ","Jind| Jind ","Kaithal| Kaithal ","Karnal | Karnal ","Kurukshetra| Kurukshetra ","Mahendragarh | Mahendragarh ","Nuh| Nuh ","Palwal| Palwal ","Panchkula| Panchkula ","Panipat| Panipat ","Rewari| Rewari ","Rohtak| Rohtak ","Sirsa| Sirsa ","Sonipat | Sonipat ","Yamuna Nagar| Yamuna Nagar "];
}else if(s1.value == "himachal-pradesh"){
var optionArray = ["|","Bilaspur| Bilaspur ","Chamba| Chamba ","Hamirpur| Hamirpur ","Kangra| Kangra "," Kinnaur| Kinnaur ","Kullu| Kullu ","Lahaul and Spiti| Lahaul and Spiti ","Mandi| Mandi ","Shimla| Shimla  ","Sirmaur| Sirmaur ","Solan| Solan ","Una| Una"];
}else if(s1.value == "jammu-&-kashmir"){
var optionArray = ["|","Anantnag| Anantnag","Bandipora| Bandipora","Baramulla| Baramulla","Badgam| Badgam","Doda| Doda","Ganderbal| Ganderbal","Jammu| Jammu","Kargil| Kargil","Kathua| Kathua","Kishtwar| Kishtwar","Kulgam| Kulgam","Kupwara| Kupwara","Leh| Leh","Poonch| Poonch","Pulwama| Pulwama","Rajouri| Rajouri","Ramban| Ramban","Reasi| Reasi","Samba| Samba","Shopian| Shopian","Srinagar| Srinagar","Udhampur| Udhampur"];
}else if(s1.value == "jharkhand"){
var optionArray = ["|","Bokaro| Bokaro","Chatra| Chatra ","Deoghar Deoghar ","Dhanbad | Dhanbad ","Dumka| Dumka ","East Singhbhum| East Singhbhum ","Garhwa| Garhwa ","Giridih| Giridih ","Godda| Godda ","Gumlia| Gumlia  ","Hazaribag| Hazaribag ","Jamtara | Jamtara ","Khunti| Khunti ","Koderma| Koderma ","Latehar| Latehar ","Lohardaga| Lohardaga ","Pakur| Pakur ","Palamu| Palamu ","Ramgarh| Ramgarh ","Ranchi | Ranchi ","Sahibganj| Sahibganj ","Seraikela Kharsawan | Seraikela Kharsawan  ","Simdega| Simdega ","West Singhbhum| West Singhbhum"];
}else if(s1.value == "karnataka"){
var optionArray = ["|","Bagalkot| Bagalkot","Ballari| Ballari ","Belagavi| Belagavi "," Bengaluru Rural| Bengaluru Rural ","Bengaluru Urban| Bengaluru Urban ","Bidar| Bidar "," Chamarajnagar| Chamarajnagar ", "Chikkaballapur| Chikkaballapur","Chikkamagaluru| Chikkamagaluru ","Chitradurga| Chitradurga ","Dakshina Kannada| Dakshina Kannada ","Davanagere| Davanagere ","Dharwad |Dharwad ","Gadag |Gadag ","Hassan |Hassan ","Haveri| Haveri ","Kalaburagi| Kalaburagi ","Kodagu |Kodagu ","Kolar| Kolar ","Koppal| Koppal ","Mandya |Mandya","Mysuru|Mysuru "," Raichur| Raichur ","Ramanagara| Ramanagara ","Shivamogga| Shivamogga ","Tumakuru| Tumakuru ","Udupi| Udupi ","Uttara Kannada| Uttara Kannada ","Vijayapura| Vijayapura ","Yadgir| Yadgir"];
}else if(s1.value == "kerala"){
var optionArray = ["|","Alappuzha| Alappuzha","Ernakulam |Ernakulam","Idukki| Idukki ","Kannur| Kannur ","Kasaragod| Kasaragod ","Kollam |Kollam ","Kottayam| Kottayam ","Kozhikode| Kozhikode ","Malappuram| Malappuram ","Palakkad |Palakkad ","Pathanamthitta| Pathanamthitta ","Thrissur |Thrissur ","Thiruvananthapuram| Thiruvananthapuram ","Wayanad| Wayanad"];

}else if(s1.value == "madhya-pradesh"){
var optionArray = ["|","Agar Malwa| Agar Malwa","Alirajpur| Alirajpur ","Anuppur| Anuppur ","Ashok Nagar| Ashok Nagar ","Balaghat |Balaghat ","Barwani| Barwani ","Betul| Betul ","Bhind| Bhind ","Bhopal| Bhopal ","Burhanpur| Burhanpur ","Chhatarpur| Chhatarpur ","Chhindwara| Chhindwara ","Damoh| Damoh","Datia| Datia ","Dewas| Dewas ","Dhar| Dhar " ,"Dindori| Dindori ","Guna| Guna ","Gwalior| Gwalior ","Harda| Harda","Hoshangabad| Hoshangabad ","Indore| Indore ","Jabalpur| Jabalpur ","Jhabua| Jhabua ","Katni| Katni ","Khandwa (East Nimar)| Khandwa (East Nimar) ","Khargone (West Nimar) |Khargone (West Nimar) ","Mandla| Mandla","Mandsaur| Mandsaur ","Morena| Morena","Narsinghpur| Narsinghpur ","Neemuch| Neemuch ","Niwari| Niwari ","Panna| Panna ","Raisen| Raisen ","Rajgarh| Rajgarh ","Ratlam |Ratlam ","Rewa| Rewa ","Sagar| Sagar ","Satna| Satna ","Sehore| Sehore ","Seoni |Seoni ","Shahdol |Shahdol ","Shajapur| Shajapur ","Sheopur| Sheopur ","Shivpuri| Shivpuri ","Sidhi| Sidhi ","Singrauli |Singrauli ","Tikamgarh| Tikamgarh ","Ujjain| Ujjain ","Umaria| Umaria ","Vidisha| Vidisha"];
}else if(s1.value == "maharashtra"){
var optionArray = ["|","Ahmednagar| Ahmednagar","Akola| Akola ", "Amravati| Amravati ","Aurangabad| Aurangabad ","Beed| Beed ","Bhandara| Bhandara  ","Buldhana| Buldhana ","Chandrapur| Chandrapur ","Dhule |Dhule ","Gadchiroli| Gadchiroli ","Gondia| Gondia ","Hingoli| Hingoli ","Jalgaon |Jalgaon ","Jaina |Jaina ","Kolhapur| Kolhapur ","Latur |Latur ","Mumbai City| Mumbai City ","Mumbai suburban| Mumbai suburban ","Nanded| Nanded ","Nandurbar| Nandurbar ","Nagpur| Nagpur ","Nashik| Nashik ","Osmanabad |Osmanabad "," Paighar| Paighar ","Parbhani| Parbhani ","Pune| Pune ","Raigad| Raigad ","Ratnagiri |Ratnagiri ","Sangli| Sangli ","Satara |Satara ","Sindhudurg| Sindhudurg ","Solapur| Solapur ","Thane| Thane ","Wardha| Wardha ","Washim| Washim ","Yavatmal| Yavatmal"];

}else if(s1.value == "nagaland"){
var optionArray = ["|","Dimapur| Dimapur","Kiphire | Kiphire","Kohima Kohima","Longleng | Longleng","Mokokchung Mokokchung ","Mon | Mon","Noklak |Noklak","Peren | Peren","Phek| Phek","Tuensang | Tuensang","Wokha Wokha","Zunheboto | Zunheboto"];
}else if(s1.value == "nct-of-elhi"){
var optionArray = ["|","Central Delhi| Central Delhi","East Delhi| East Delhi","New Delhi| New Delhi","North Delhi| North Delhi","North East Delhi| North East Delhi","North West Delhi| North West Delhi","Shahdara| Shahdara","South Delhi| South Delhi","South East Delhi| South East Delhi","South West Delhi| South West Delhi","West Delhi| West Delhi"];
}else if(s1.value == "odisha"){
var optionArray = ["|","Angul| Angul","Boudh (Bauda)| Boudh (Bauda)","Bhadrak| BhadrakBalangir| Balangir","Bargarh (Baragarh)| Bargarh (Baragarh)","Balasore| Balasore","Cuttack| CuttackDebagarh (Deogarh) Debagarh (Deogarh)","Dhenkanal| Dhenkanal","Ganjam| Ganjam","Gajapati| Gajapati","Jharsuguda| Jharsuguda","Jajpur| Jajpur","Jagatsinghpur| Jagatsinghpur","Khordha| KhordhaKendujhar (Keonjhar)| Kendujhar (Keonjhar)","Kalahandi|Kalahandi","Kandhamal| Kandhamal","Koraput| Koraput","Kendrapara| Kendrapara","Malkangiri| Malkangiri","Mayurbhanj | Mayurbhanj","Nabarangpur | Nabarangpur","Nuapada | Nuapada","Nayagarh |Nayagarh","Puri | Puri","Rayagada | Rayagada","Sambalpur | Sambalpur","Subarnapur (Sonepur)| Subarnapur (Sonepur)","Sundargarh | Sundargarh "];

}else if(s1.value == "punjab"){
var optionArray = ["|","Amritsar| Amritsar","Barnala| Barnala","Bathinda| Bathinda","Firozpur| Firozpur","Faridkot| Faridkot","Fatehgarh Sahib| Fatehgarh Sahib","Fazilkal | Fazilkal","Gurdaspur| Gurdaspur","Hoshiarpur| Hoshiarpur","Jalandhar| Jalandhar","Kapurthala| Kapurthala","Ludhiana| Ludhiana","Mansa |Mansa","Moga| Moga","Sri Muktsar Sahib| Sri Muktsar Sahib","Pathankot| Pathankot","Patiala| Patiala","Rupnagar| Rupnagar","Sahibzada Ajit Singh Nagar| Sahibzada Ajit Singh Nagar","Sangrur| Sangrur","Shahid Bhagat Singh Nagar| Shahid Bhagat Singh Nagar","Tarn Taran| Tar Taran"];
}else if(s1.value == "rajasthan"){
var optionArray = ["|","Ajmer |Ajmer","Alwar| Alwar","Bikaner |Bikaner","Barmer| Barmer","Banswara| Banswara","Bharatpur| Bharatpur","Baran |Baran","Bundi| Bundi","Bhilwara| Bhilwara","Churu| Churu","Chittorgarh |Chittorgarh","Dausa |Dausa","Dholpur| Dholpur","Dungarpur| Dungarpur","Ganganagar| Ganganagar","Hanumangarh |Hanumangarh","Jhunjhunu |Jhunjhunu","Jalore|  Jalore","Jodhpur| Jodhpur","Jaipur| Jaipur","Jaisalmer| Jaisalmer","Jhalawar| Jhalawar","Karauli| Karauli","Kota| Kota","Nagaur| Nagaur","Pali| Pali","Pratapgarh| Pratapgarh","Rajsamand| Rajsamand","Sikar| Sikar","Sawai Madhopur| Sawai Madhopur","Sirohi| Sirohi","Tonk| Tonk","Udaipur| Udaipur"];
}else if(s1.value == "sikkim"){
var optionArray = ["|","East Sikkim | East Sikkim","North Sikkim | North Sikkim","South Sikkim | South Sikkim","West Sikkim | West Sikkim"];
}else if(s1.value == "tamil-nadu"){
var optionArray = ["|","Ariyalur |AriyalurChengalpattu |Chengalpattu","Chennai |Chennai","Coimbatore| Coimbatore","Cuddalore |Cuddalore","Dharmapuri |Dharmapuri","Dindigul |Dindigul","Erode| Erode","Kallakurichi| Kallakurichi","Kanchipuram |Kanchipuram","Kanyakumari| Kanyakumari","Karur| Karur","Krishnagiri| Krishnagiri","Madurai| Madurai","Nagapattinam |Nagapattinam","Nilgiris| Nilgiris","Namakkal |Namakkal","Perambalur| Perambalur","Pudukkottai| Pudukkottai","Ramanathapuram |Ramanathapuram","Ranipet |Ranipet","Salem| Salem","Sivaganga| Sivaganga","Tenkasi| Tenkasi","Tirupur| Tirupur","Tiruchirappalli| Tiruchirappalli","Theni |Theni","Tirunelveli| Tirunelveli","Thanjavur| Thanjavur","Thoothukudi |Thoothukudi","Tirupattur |Tirupattur","Tiruvallur| Tiruvallur","Tiruvarur| Tiruvarur","Tiruvannamalai | Tiruvannamalai","Vellore| Vellore","Viluppuram| Viluppuram","Virudhunagar| Virudhunagar"];
}else if(s1.value == "telangana"){
var optionArray = ["|","Adilabad|Adilabad","Komaram Bheem|Komaram Bheem","Bhadradri Kothagudem| Bhadradri Kothagudem","Hyderabad| Hyderabad","Jagtial Jagtial|Jangaon Jangaon","Jayashankar Bhupalpally|Jayashankar Bhupalpally","Jogulamba Gadwal| Jogulamba Gadwal","Kamareddy| Kamareddy","Karimnagar| Karimnagar","Khammam| Khammam","Mahabubabad| Mahabubabad","Mahbubnagar| Mahbubnagar","Mancherial| Mancherial","Medak| Medak","Medchal-Malkajgiri| Medchal-Malkajgiri","Mulugu| Mulugu","Nalgonda| Nalgonda","Narayanpet| Narayanpet","Nagarkumool| Nagarkumool","Nirmal| Nirmal","Nizamabad| Nizamabad","Peddapalli| Peddapalli","Rajanna Sircilla| Rajanna Sircilla","Ranga Reddy| Ranga Reddy","Sangareddy| Sangareddy","Siddipet| Siddipet","Suryapet| Suryapet","Vikarabad| Vikarabad","Wanaparthy| Wanaparthy","Warangal Urban| Warangal Urban","Warangal Rural| Warangal Rural","Yadadri Bhuvanagiri| Yadadri Bhuvanagiri"];

}else if(s1.value == "uttar-pradesh"){
var optionArray = ["|","Agra| AgraAligarh| Aligarh","Allahabad| Allahabad","Ambedkar Naga| Ambedkar Nagar","Amethil| Amethil","Amroha| Amroha","Auraiya| Auraiya","Azamgarh| Azamgarh","Bagpat| Bagpat","Bahraich| Bahraich","Ballia| Ballia","Balrampur| Balrampur","Banda| Banda","Barabanki| Barabanki","Bareilly| Bareilly","Basti| Basti","Bhadohi| Bhadohi","Bijnor| Bijnor","Budaun| Budaun","Bulandshahr| Bulandshahr","Chandauli| Chandauli","Chitrakoot| Chitrakoot","Deoria| Deoria","Etah| Etah","Etawah| Etawah","Faizabad| Faizabad","Farrukhabad| Farrukhabad","Fatehpur| Fatehpur","Firozabad| Firozabad","Gautam Buddh Nagar| Gautam Buddh Nagar","Ghaziabad| Ghaziabad","Ghazipur| Ghazipur","Gonda| Gonda","Gorakhpur| Gorakhpur","Hamirpur| Hamirpur","Hapur| Hapur","Hardoi| Hardoi","Hathras| Hathras","Jalaun| Jalaun","Jaunpur| Jaunpur","Jhansi| Jhansi","Kannauj| Kannauj","Kanpur Dehat| Kanpur Dehat","Kanpur Nagar| Kanpur Nagar","Kasganj| Kasganj","Kaushambi| Kaushambi","Kushinagar| Kushinagar","Lakhimpur Kheri Lakhimpur Kheri","Lalitpur| Lalitpur","Lucknow Lucknow","Maharajganj| Maharajganj","Mahoba| Mahoba","Mainpuri| Mainpuri","Mathura| Mathura","Mau| Mau","Meerut| Meerut","Mirzapur| Mirzapur","Moradabad| Moradabad","Muzaffarnagar| Muzaffarnagar","Pilibhit| Pilibhit","Pratapgarh| Pratapgarh","Raebareli| Raebareli","Rampur| Rampur","Saharanpur| Saharanpur","Sambhal Sambhal","Sant Kabir Nagar| Sant Kabir Nagar","Shahjahanpur| Shahjahanpur","Shamiil| Shamiil","Shravasti| Shravasti","Siddharthnagar| Siddharthnagar","Sitapur| Sitapur","Sonbhadra| Sonbhadra","Sultanpur| Sultanpur","Unnao| Unnao","Varanasi| Varanasi"];
}else if(s1.value == "uttarakhand"){
var optionArray = ["|","Almora| Almora","Bageshwar| Bageshwar","Chamoli| Chamoli","Champawat| Champawat","Dehradun| Dehradun","Haridwar| Haridwar","Nainital| Nainital","Pauri Garhwal| Pauri Garhwal","Pithoragarh| Pithoragarh","Rudraprayag| Rudraprayag","Tehri Garhwal| Tehri Garhwal","Udham Singh Nagar| Udham Singh Nagar","Uttarkashi|Uttarkashi"];
}else if(s1.value == "west-bengal"){
var optionArray = ["|","Alipurduar| Alipurduar","Bankur| Bankura","Paschim Bardhaman| Paschim Bardhaman","Purba Bardhaman| Purba Bardhaman","Birbhum|Birbhum","Cooch Behar| Cooch Behar","Dakshin Dinajpur| Dakshin Dinajpur","Darjeeling| Darjeeling","Hooghly| Hooghly","Howrah| Howrah","Jalpaiguri| Jalpaiguri","Jhargram| Jhargram","Kalimpong| Kalimpong","Kolkata| Kolkata","Maldah| Maldah","Murshidabad| Murshidabad","Nadia| Nadia","North 24 Parganas| North 24 Parganas","Paschim Medinipur| Paschim Medinipur","Purba Medinipu|r Purba Medinipur","Purulia| Purulia","South 24 Parganas| South 24 Parganas","Uttar Dinajpur| Uttar Dinajpur"];
}
for(var option in optionArray){
var pair = optionArray[option].split("|");
var newOption = document.createElement("option");
newOption.value = pair[0];
newOption.innerHTML = pair[1];
s2.options.add(newOption);
}
}

</script>
</head>
<body><br>
	<div class="nav">
			<ul>
  <li><a href="reslvl.php">Back</a></li>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../admin/alog.php">Admin</a></li>
  <li><a href="../voter/vlog.php">Voter Login</a></li>
  <li><a href="../voter/vreg.php">Voter Registration</a></li>
  <li><a href="../voter/vlog.php">Vote</a></li>
  <li><a href="LocalPanchayat.php">Refresh</a></li>
  <li><a href="../notification.php">Notification</a></li
</ul>
	<h1>CANDIDATE REGISTRATION FORM</h1>
 	

<center>
	<div class = "container">
	<form action="result.php" method="POST">
<h2>Stand from</h2>
<hr/>
<p>
  <label>State:</label>

<select id="state" name="state" onchange="populate(this.id,'district')" style="width: 20%; border-radius: .20em;" required>

<option value="">Select</option>

<option value="andhra-pradesh" notselected="">Andhra Pradesh</option>                                    
<option value="arunachal-pradesh" notselected="">Arunachal Pradesh</option>
<option value="assam" notselected="">Assam</option>  
<option value="bihar" notselected="">Bihar</option>                                  
                                  
<option value="chhattisgarh" notselected="">Chhattisgarh</option>                                  
                                   
<option value="goa" notselected="">Goa</option>                                    
<option value="gujarat" notselected="">Gujarat</option>                                    
<option value="haryana" notselected="">Haryana</option>                                    
<option value="himachal-pradesh" notselected="">Himachal Pradesh</option>
<option value="jammu-and-kashmir" notselected="">Jammu &amp; Kashmir</option>
<option value="jharkhand" noselected="">Jharkhand</option>                                    
<option value="karnataka" notselected="">Karnataka</option>                                    
<option value="kerala" notselected="">Kerala</option>                                    
                                  
<option value="madhya-pradesh" notselected="">Madhya Pradesh</option>                                    
<option value="maharashtra" notselected="">Maharashtra</option>                                   
                                 
<option value="nagaland" notselected="">Nagaland</option>                                   
<option value="nct-of-delhi" notselected="">NCT OF Delhi</option>                                    
<option value="odisha" notselected="">Odisha</option>                                   

<option value="punjab" notselected="">Punjab</option>                                   
<option value="rajasthan" notselected="">Rajasthan</option>                                    
<option value="sikkim" notselected="">Sikkim</option>                                   
<option value="tamil-nadu" notselected="">Tamil Nadu</option>                                   
<option value="telangana" notselected="">Telangana</option>                                   
                                 
<option value="uttar-pradesh" notselected="">Uttar Pradesh</option>                                    
<option value="uttarakhand" notselected="">Uttarakhand</option>
<option value="west-bengal" notselected="">West Bengal</option>
</select>
</p>
<hr />
<p>
<label>District:</label>
<select id="district" name="district" style="width: 19%;
border-radius: .20em;"  required><option value="" notselected="selected">Select one</option></select>
</p>
<hr />
<input class="btn-sd" type="submit" name="btn-sd" value="go" />
</form>
</div>
</center>
</body>
</html>