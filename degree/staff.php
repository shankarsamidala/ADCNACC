<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/css.php";?>
	<style>
		.nav-tabs {padding:0; width:auto; float:left; display:block}
		.nav-tabs .nav-item {float:left; display:block}
		.nav-tabs>.nav-item>.nav-link {padding:8px 12px;border-radius:15px; font-weight:600; float:left; display:block}
		.nav-tabs>.nav-item>.nav-link.active {  color:#333333; border: 2px solid #333333;}
		/*@media screen and (max-width: 768px){
		.nav-tabs {padding:0; width:auto; float:left;}
		}*/
	</style>
</head>

<body class="sidebar-collapse">
    <!-- Navbar -->
	
    <?php include "include/header.php";?>
    
  	<div class="page-top">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8 align-self-end">
					<div class="title-bg">
					   <h3><a href="index.php" class="text-info">Home</a></h3>
					   <h3><span class="text-warning">Staff</span></h3>
				  </div>
				</div>
			</div>
		</div>		   
	</div>
	<div class="page-content">
	<div class="container content-pt">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card card-warning">
					<div class="card-header">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#teaching" role="tab" aria-controls="home" aria-selected="true">Teaching Staff</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#supporting" role="tab" aria-controls="profile" aria-selected="false">Supporting Staff</a>
						</li>
					</ul>
					</div>
					<div class="card-body">
					
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="teaching" role="tabpanel" aria-labelledby="home-tab">
							<table class="table table-bordered table-hover table-responsive">
							  <thead>
							  <tr>
								<th>S.NO</th>
								<th>NAME</th>
								<th>DESIGNATION</th>
								<th>DEPARTMENT</th>
							  </tr>
							  </thead>
							  <tbody>
							  <tr>
								<td>1</td>
								<td>Dr.    B.E.V.L. NAIDU</td>
								<td>PRINCIPAL</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>2</td>
								<td>Dr.    P S V SHANMUKHI</td>
								<td>Associate    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>3</td>
								<td>Dr.    NAKKA RAJESWARA RAO</td>
								<td>Associate    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>4</td>
								<td>Dr    GODLA SANJIV RAO</td>
								<td>Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>5</td>
								<td>Dr.    CHALUVADI V RAGHAVENDRAN</td>
								<td>Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>6</td>
								<td>DR.    R ANIL KUMAR</td>
								<td>Associate    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>7</td>
								<td>Dr.V    VIJAYASRI BOLISETTY</td>
								<td>Associate    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>8</td>
								<td>Dr.    NARLA VENKATA LALITHA</td>
								<td>Associate    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>9</td>
								<td>Dr.    S.V.R. PRABHAKAR</td>
								<td>Assistant    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>10</td>
								<td>SRI.    M. CHANDRA SEKHAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>11</td>
								<td>SRI.    N. SATISH BABU</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>12</td>
								<td>SRI.    B. V. RAMANA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>13</td>
								<td>SRI    KANCHUMARTI DORA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>14</td>
								<td>SRI    PEETANI DEVI DURGA N RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>15</td>
								<td>SRI    N B C N MURTHY</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>16</td>
								<td>SRI.    V.S.N. KUMAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>17</td>
								<td>SRI.L.    DIVAKARA RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>18</td>
								<td>SRI    .D.RAJA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>19</td>
								<td>SRI.    M.JANAKI RAM</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>20</td>
								<td>SMT.    G.VIJAYA LAKSHMI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>21</td>
								<td>SMT.    P T ACHYUTA VALLI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>22</td>
								<td>KUM.    JALLURI N V L KRISHNA CHANDRIKA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>23</td>
								<td>SRI    CHELLURI V B SRINIVAS</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>24</td>
								<td>SMT.    DOKIBURRA BEULAH</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>25</td>
								<td>SMT    G SATYA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>26</td>
								<td>SRI    UDDAGIRI LAKSHMI NAGENDRA KUMAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>27</td>
								<td>SRI.    K. C. PRADEEP</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>28</td>
								<td>SMT.    N. VANI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>29</td>
								<td>SRI    M VARUN RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>30</td>
								<td>SRI.    S.V.L. NARASIMHAM</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>31</td>
								<td>SMT.    V.SOBHA&nbsp;</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>32</td>
								<td>SRI.P.CH.NAGA    SAI ADITYA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>33</td>
								<td>SRI.    MATTA EMMANUEL</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>34</td>
								<td>SRI.    V. SRINIVAS RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>35</td>
								<td>SRI.    N. KIRAN KUMAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>36</td>
								<td>SRI.M.NARAYANA    RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>37</td>
								<td>SMT.    K. BHANU REKHA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>38</td>
								<td>SRI.    G. SHAMBU SRINIVAS</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>39</td>
								<td>KUM.    N. SAI LAKSHMI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>40</td>
								<td>SRI.    U. MALLIKARJUNA RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>41</td>
								<td>SRI.    S.T.G. BHASYAM</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>42</td>
								<td>SRI.    CH. JANARDHAN</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>43</td>
								<td>SRI.J.RAMA    KRISHNA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>44</td>
								<td>SRI.    M.MURALIDHAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>45</td>
								<td>SRI.    S.V. DATTU KUMAR</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>46</td>
								<td>SRI.    D. ESWARA RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>47</td>
								<td>SRI.    K. SATYANARAYANA MURTHY</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>48</td>
								<td>SRI    CH V V SATYANARAYANA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>49</td>
								<td>SMT.    D. KEERTHI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>50</td>
								<td>KUM.    I. GOWRI PRIYA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>51</td>
								<td>MAMIDI    VENKATA RAMA KRISHNA SARMA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>52</td>
								<td>SMT.SK.MUMTAZ</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>53</td>
								<td>SRI.    T. TEJESWARA RAO</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>54</td>
								<td>SRI.    G. NERELLA REDDY</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>55</td>
								<td>SRI.    Y. AVINASH</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>56</td>
								<td>SMT.    TEKIMUDI ANUSHA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>57</td>
								<td>SRI.    DASARI KHANENDRA KUMAR RAJA&nbsp;</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>58</td>
								<td>Dr.SAMPATARAO.U</td>
								<td>Assistant    Professor</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>59</td>
								<td>SRI.    BANDARU VENKATESH</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>60</td>
								<td>SRI.    PRAGADA SANTHOSH&nbsp;</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>61</td>
								<td>SRI.    JAGADEESH KUMAR KINTALI</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>62</td>
								<td>SRI.    S SIVA KRISHNA</td>
								<td>Lecturer</td>
								<td>COMPUTER    SCIENCE</td>
							  </tr>
							  <tr>
								<td>63</td>
								<td>Dr    B.SREENU</td>
								<td>Assistant    Professor</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>64</td>
								<td>Dr.MURALASETTI    NOOKARAJU</td>
								<td>Associate    Professor</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>65</td>
								<td>SRI.    K. SURESH KUMAR</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>66</td>
								<td>SRI    K NAGU</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>67</td>
								<td>SRI.K.VEERA    BABU</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>68</td>
								<td>SRI.K.SOMARAJU</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>69</td>
								<td>KUM.    BADDUKUNDI DIVYA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>70</td>
								<td>SRI.L.V.SAI    VARA PRASAD</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>71</td>
								<td>SMT.B.    SIRISHA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>72</td>
								<td>SMT.    R. BHAVANA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>73</td>
								<td>SMT.    Y. SRIDEVI</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>74</td>
								<td>SRI.    VADLAPATI ANIL</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>75</td>
								<td>KUM.    B. SRI NIHARIKA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>76</td>
								<td>KUM.    D. MADHAVI RATNA PRIYA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>77</td>
								<td>KUM.    G. GEETHIKA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>78</td>
								<td>SMT.    PINDI SANTHI</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>79</td>
								<td>SMT.    P. VIJAYA KUMARI</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>80</td>
								<td>SRI.    M.D.T. GOPAL</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>81</td>
								<td>KORRA    ANANDA RAO</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>82</td>
								<td>SOPETI    SEKHAR</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>83</td>
								<td>SMT.    A. BHARATHI</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>84</td>
								<td>KUM.    KARRI SAI LALITHA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>85</td>
								<td>SRI.    SRIHARI SOMESWARARAO VAKKAPATLA</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>86</td>
								<td>SRI.    L.VENKATESWARA RAO</td>
								<td>Lecturer</td>
								<td>CHEMISTRY    &amp; LIFE SCIENCE</td>
							  </tr>
							  <tr>
								<td>87</td>
								<td>BOMMIDI    HEMANTH</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>88</td>
								<td>Dr    S A G ANSAR ALI</td>
								<td>Assistant    Professor</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>89</td>
								<td>Dr.P.    RAMESH</td>
								<td>Assistant    Professor</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>90</td>
								<td>SRI.    P. NAGENDRA SRINIVAS</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>91</td>
								<td>KUM.    K.APARNA SRAVANTHI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>92</td>
								<td>SRI.    P. NARA SIMHARAO</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>93</td>
								<td>SRI.    B. VEERA BABU</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>94</td>
								<td>SRI.    V. VEDHA MURTHY</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>95</td>
								<td>SRI.    S. KRISHNA BABU</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>96</td>
								<td>SRI.J.    GANESH</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>97</td>
								<td>SRI.    KOLLIPARA BALA KRISHNA</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>98</td>
								<td>SRI.    M. SUBRAHMANYAM</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>99</td>
								<td>MR.    PALLELA GANGADHAR</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>100</td>
								<td>SMT.    N. SATYA SIRISHA&nbsp;</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>101</td>
								<td>MR.    M. RAMBABU</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>102</td>
								<td>MS.    B. MEENAKSHI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>103</td>
								<td>MR.    G. SUMAN</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>104</td>
								<td>KUM    K. MEENAKSHI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>105</td>
								<td>MR.    P. SURESH</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>106</td>
								<td>MR.    SAI KRISHNAM RAJU</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>107</td>
								<td>MRS.P.    JYOTHI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>108</td>
								<td>KUM.    MEHAR SONAM</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>109</td>
								<td>KUM    TIGIREDDY SUSHMA VEERANYA</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>110</td>
								<td>SMT.    A. SRAVANA LAKSHMI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>111</td>
								<td>SRI.    R. RANA PRATAP SIMHA</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>112</td>
								<td>SRI.P.VENKATESWARA    RAO</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>113</td>
								<td>SMT.    S.V. MANJULA RANI</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>114</td>
								<td>SRI    CH. YATISH SANKAR</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>115</td>
								<td>SRI.    ANIL KUMAR AKKALA</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>116</td>
								<td>SRI.    RAMA KRISHNA DASIGA</td>
								<td>Lecturer</td>
								<td>COMMERCE    &amp; MANAGEMENT</td>
							  </tr>
							  <tr>
								<td>117</td>
								<td>SRI.P.SRINU</td>
								<td>PHYSICAL    DIRECTOR</td>
								<td>&nbsp;</td>
							  </tr>
							  </tbody>
							</table>

						</div>
						<div class="tab-pane fade" id="supporting" role="tabpanel" aria-labelledby="profile-tab">
							 	<table  class="table table-bordered table-hover table-responsive">
								  <thead>
								  <tr>
									<th>Sl.No</th>
									<th>NAME</th>
									<th>DESIGNATION</th>
								  </tr>
								  </thead>
								  <tbody>
								  <tr>
									<td>1</td>
									<td>SRI.    PATNEEDI KAMA RAJU</td>
									<td>SUPERINTENDENT</td>
								  </tr>
								  <tr>
									<td>2</td>
									<td>SRI.K.SOLOMON    RAJU</td>
									<td>SCHOLARSHIP</td>
								  </tr>
								  <tr>
									<td>3</td>
									<td>SMT.    V.TANUJAA</td>
									<td>CASHIER</td>
								  </tr>
								  <tr>
									<td>4</td>
									<td>SMT.    MD. TABASSUM BEGUM</td>
									<td>RECEPTION</td>
								  </tr>
								  <tr>
									<td>5</td>
									<td>SRI.V.SEETHA    RAMA MURTHY</td>
									<td>STORE    INCHARGE</td>
								  </tr>
								  <tr>
									<td>6</td>
									<td>SRI.    POTTI POLA RAO</td>
									<td>ASST.    LIBRARIAN</td>
								  </tr>
								  <tr>
									<td>7</td>
									<td>SRI.    ASANA BALAJEE</td>
									<td>ASST.    LIBRARIAN</td>
								  </tr>
								  <tr>
									<td>8</td>
									<td>SRI.    K.SURYA RAO</td>
									<td>HARDWARE</td>
								  </tr>
								  <tr>
									<td>9</td>
									<td>SRI.K.VINAY    KUMAR</td>
									<td>HARDWARE</td>
								  </tr>
								  <tr>
									<td>10</td>
									<td>SRI.    P. GANGA RAJU</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>11</td>
									<td>SRI.    MD. VAHEED AHMED</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>12</td>
									<td>SRI.A.V.    PRASADA RAO</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>13</td>
									<td>SMT.L.SRIVIDYA</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>14</td>
									<td>SRI.    VELUGURI KRISHNA GURU MURTHY</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>15</td>
									<td>SRI.    S.V.V.G.S.KRISHMANA NAIDU</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>16</td>
									<td>SRI.    D. NOOKA RAJU</td>
									<td>OFFICE    ASSISTANT</td>
								  </tr>
								  <tr>
									<td>17</td>
									<td>SRI.K.V.V.    RAVI KUMAR</td>
									<td>DTP    OPERATOR</td>
								  </tr>
								  <tr>
									<td>18</td>
									<td>KUM.    KUTIKUPPALA PARIMALA</td>
									<td>DTP    OPERATOR</td>
								  </tr>
								  <tr>
									<td>19</td>
									<td>SRI.    NARLA VENKATESWARARAO</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>20</td>
									<td>SRI.    CH. SESHAGIRI RAO</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>21</td>
									<td>SRI.    V.SRINIVASA RAO</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>22</td>
									<td>SRI.    D. RAJESH</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>23</td>
									<td>SRI.    KORUKONDA SWAMY SAI DURGA PRASADA RAO</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>24</td>
									<td>SRI.    REDDY PRASAD</td>
									<td>FLOOR    INCHARGE</td>
								  </tr>
								  <tr>
									<td>25</td>
									<td>SRI.    M.DHANARAJU</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>26</td>
									<td>KUM.    CH. ROOPA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>27</td>
									<td>KUM.    R. DIVYA SRI</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>28</td>
									<td>KUM.    B. BHAGYASRI VENKATA LAKSHMI</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>29</td>
									<td>KUM.    MAROJU MATHREYA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>30</td>
									<td>SMT.&nbsp; SAVARAM ASHA LATHA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>31</td>
									<td>SMT.    SANA JYOTHI PRIYANKA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>32</td>
									<td>SMT.    P.SATYA BHAVANI</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>33</td>
									<td>KUM.    KARRI SAI LALITHA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>34</td>
									<td>BADIGANTI    SRINIVAS</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>35</td>
									<td>SRI.    K. KIRAN KUMAR</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>36</td>
									<td>SRI.    U. VENKATA RAMANA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>37</td>
									<td>SMT.    CHALLA LEELA DEVI</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>38</td>
									<td>GUBBALA    UMA MAHESWAR RAO</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>39</td>
									<td>KUM.    R.LALITHAMBICA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>40</td>
									<td>SRI.    REDDY ANANTHA RAJ KUMAR</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>41</td>
									<td>SRI.    KOMPELLA S J P BABUJI</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>42</td>
									<td>SRI.    G. MANIKANTA</td>
									<td>LAB    DEMONOSTRATOR</td>
								  </tr>
								  <tr>
									<td>43</td>
									<td>SRI.M.V.    GANESWARARAO</td>
									<td>SUPERVISOR</td>
								  </tr>
								  <tr>
									<td>44</td>
									<td>SRI.A.    SUBBI REDDY</td>
									<td>SUPERVISOR</td>
								  </tr>
								  </tbody>
								</table>
						</div>
						
					</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
				
				<?php include "include/footer.php";?>
    </div>
	 <?php include "include/js.php";?>
</body>
</html>