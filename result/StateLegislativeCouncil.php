

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
	<link rel="stylesheet" href="../candidate/cstyle.css" />
<script>
function populate(s1,s2){
var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);

s2.innerHTML = "";
if(s1.value == "andhra-pradesh"){
var optionArray = ["|","Anantapur|Anantapur","Chittoor|Chittoor","EastGodavari|East Godavari ","Guntur|Guntur","Kadapa|Kadapa","Krishna|Krishna ","Kumool|Kumool","Prakasam|Prakasam ","Nellore|Nellore","Srikakulam|Srikakulam","Visakhapatnam|Visakhapatnam","Vizianagaram|Vizianagaram","WestGodavari|West Godavari"];

}else if(s1.value == "bihar"){
var optionArray = ["|","Araria|Araria ","Arwal|Arwal ","Aurangabad| Aurangabad ","Banka|Banka ","Begusarai| Begusarai ","Bhagalpur| Bhagalpur ","Bhojpur| Bhojpur ","Buxar| Buxar ","Danang|Danang ","East Champaran | East Champaran ","Gaya|Gaya ","Gopalganj| Gopalganj ","Jamui|Jamui ","Jehanabad|Jehanabad ","Kaimur|Kaimur ","Katihar|Katihar ","Khagaria|Khagaria "," Kishanganj| Kishanganj "," Lakhisarai|LakhisaraiMadhepura|Madhepura ","Madhubani|Madhubani ","Munger|Munger ","Muzaffarpur|Muzaffarpur ","Nalanda|Nalanda ","Nawada|Nawada ","Patna|Patna ","Purnia|Purnia ","Rohtas|Rohtas ","Saharsa|Saharsa ","Samastipur|Samastipur ","Saran|Saran ","Sheikhpura| Sheikhpura ","Sheohar| Sheohar ","Sitamarhi| Sitamarhi ","Siwan|Siwan ","Supaul|Supau ","Vaishali|Vaishali ","West Champaran| West Champaran"];

}else if(s1.value == "karnataka"){
var optionArray = ["|","Bagalkot| Bagalkot","Ballari| Ballari ","Belagavi| Belagavi "," Bengaluru Rural| Bengaluru Rural ","Bengaluru Urban| Bengaluru Urban ","Bidar| Bidar "," Chamarajnagar| Chamarajnagar ", "Chikkaballapur| Chikkaballapur","Chikkamagaluru| Chikkamagaluru ","Chitradurga| Chitradurga ","Dakshina Kannada| Dakshina Kannada ","Davanagere| Davanagere ","Dharwad |Dharwad ","Gadag |Gadag ","Hassan |Hassan ","Haveri| Haveri ","Kalaburagi| Kalaburagi ","Kodagu |Kodagu ","Kolar| Kolar ","Koppal| Koppal ","Mandya |Mandya","Mysuru|Mysuru "," Raichur| Raichur ","Ramanagara| Ramanagara ","Shivamogga| Shivamogga ","Tumakuru| Tumakuru ","Udupi| Udupi ","Uttara Kannada| Uttara Kannada ","Vijayapura| Vijayapura ","Yadgir| Yadgir"];

}else if(s1.value == "maharashtra"){
var optionArray = ["|","Ahmednagar| Ahmednagar","Akola| Akola ", "Amravati| Amravati ","Aurangabad| Aurangabad ","Beed| Beed ","Bhandara| Bhandara  ","Buldhana| Buldhana ","Chandrapur| Chandrapur ","Dhule |Dhule ","Gadchiroli| Gadchiroli ","Gondia| Gondia ","Hingoli| Hingoli ","Jalgaon |Jalgaon ","Jaina |Jaina ","Kolhapur| Kolhapur ","Latur |Latur ","Mumbai City| Mumbai City ","Mumbai suburban| Mumbai suburban ","Nanded| Nanded ","Nandurbar| Nandurbar ","Nagpur| Nagpur ","Nashik| Nashik ","Osmanabad |Osmanabad "," Paighar| Paighar ","Parbhani| Parbhani ","Pune| Pune ","Raigad| Raigad ","Ratnagiri |Ratnagiri ","Sangli| Sangli ","Satara |Satara ","Sindhudurg| Sindhudurg ","Solapur| Solapur ","Thane| Thane ","Wardha| Wardha ","Washim| Washim ","Yavatmal| Yavatmal"];

}else if(s1.value == "telangana"){
var optionArray = ["|","Adilabad|Adilabad","Komaram Bheem|Komaram Bheem","Bhadradri Kothagudem| Bhadradri Kothagudem","Hyderabad| Hyderabad","Jagtial Jagtial|Jangaon Jangaon","Jayashankar Bhupalpally|Jayashankar Bhupalpally","Jogulamba Gadwal| Jogulamba Gadwal","Kamareddy| Kamareddy","Karimnagar| Karimnagar","Khammam| Khammam","Mahabubabad| Mahabubabad","Mahbubnagar| Mahbubnagar","Mancherial| Mancherial","Medak| Medak","Medchal-Malkajgiri| Medchal-Malkajgiri","Mulugu| Mulugu","Nalgonda| Nalgonda","Narayanpet| Narayanpet","Nagarkumool| Nagarkumool","Nirmal| Nirmal","Nizamabad| Nizamabad","Peddapalli| Peddapalli","Rajanna Sircilla| Rajanna Sircilla","Ranga Reddy| Ranga Reddy","Sangareddy| Sangareddy","Siddipet| Siddipet","Suryapet| Suryapet","Vikarabad| Vikarabad","Wanaparthy| Wanaparthy","Warangal Urban| Warangal Urban","Warangal Rural| Warangal Rural","Yadadri Bhuvanagiri| Yadadri Bhuvanagiri"];

}else if(s1.value == "uttar-pradesh"){
var optionArray = ["|","Agra| AgraAligarh| Aligarh","Allahabad| Allahabad","Ambedkar Naga| Ambedkar Nagar","Amethil| Amethil","Amroha| Amroha","Auraiya| Auraiya","Azamgarh| Azamgarh","Bagpat| Bagpat","Bahraich| Bahraich","Ballia| Ballia","Balrampur| Balrampur","Banda| Banda","Barabanki| Barabanki","Bareilly| Bareilly","Basti| Basti","Bhadohi| Bhadohi","Bijnor| Bijnor","Budaun| Budaun","Bulandshahr| Bulandshahr","Chandauli| Chandauli","Chitrakoot| Chitrakoot","Deoria| Deoria","Etah| Etah","Etawah| Etawah","Faizabad| Faizabad","Farrukhabad| Farrukhabad","Fatehpur| Fatehpur","Firozabad| Firozabad","Gautam Buddh Nagar| Gautam Buddh Nagar","Ghaziabad| Ghaziabad","Ghazipur| Ghazipur","Gonda| Gonda","Gorakhpur| Gorakhpur","Hamirpur| Hamirpur","Hapur| Hapur","Hardoi| Hardoi","Hathras| Hathras","Jalaun| Jalaun","Jaunpur| Jaunpur","Jhansi| Jhansi","Kannauj| Kannauj","Kanpur Dehat| Kanpur Dehat","Kanpur Nagar| Kanpur Nagar","Kasganj| Kasganj","Kaushambi| Kaushambi","Kushinagar| Kushinagar","Lakhimpur Kheri Lakhimpur Kheri","Lalitpur| Lalitpur","Lucknow Lucknow","Maharajganj| Maharajganj","Mahoba| Mahoba","Mainpuri| Mainpuri","Mathura| Mathura","Mau| Mau","Meerut| Meerut","Mirzapur| Mirzapur","Moradabad| Moradabad","Muzaffarnagar| Muzaffarnagar","Pilibhit| Pilibhit","Pratapgarh| Pratapgarh","Raebareli| Raebareli","Rampur| Rampur","Saharanpur| Saharanpur","Sambhal Sambhal","Sant Kabir Nagar| Sant Kabir Nagar","Shahjahanpur| Shahjahanpur","Shamiil| Shamiil","Shravasti| Shravasti","Siddharthnagar| Siddharthnagar","Sitapur| Sitapur","Sonbhadra| Sonbhadra","Sultanpur| Sultanpur","Unnao| Unnao","Varanasi| Varanasi"];

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
  <li><a href="StateLegislativeCouncil.php">Refresh</a></li>
  <li><a href="../notification.php">Notification</a></li>
</ul>
	<h1>CANDIDATE REGISTRATION FORM</h1>
 	

<center>
	<div class = "container">
	<form action="result.php" method="POST">
<h2>Stand from</h2>
<hr />
<p>
  <label>State:
</label>
<select id="state" name="state" onchange="populate(this.id,'district')" style="width: 20%; border-radius: .20em;" required>

<option value="">Select</option>

<option value="andhra-pradesh" notselected="">Andhra Pradesh</option>                                    

  
<option value="bihar" notselected="">Bihar</option>                                  
                                   
<option value="karnataka" notselected="">Karnataka</option>                                    
                                  
<option value="maharashtra" notselected="">Maharashtra</option>                                   
                                  
<option value="telangana" notselected="">Telangana</option>                                   
                                 
<option value="uttar-pradesh" notselected="">Uttar Pradesh</option>                                    
</select>
</p>
<hr />
<p>
<label>District:</label>
<select id="district" name="district" style="width: 19%; border-radius: .20em;" required><option value="" notselected="selected">Select one</option></select>
</p>
<hr />
<input class="btn-sd" type="submit" name="btn-sd" value="go" />
</form>
</div>
</center>
</body>
</html>