<?php
// Create a faculty website with various departments
$departments = array("Computer Science", "Mathematics", "Physics", "Chemistry");

// Create timetables for each department
$timetables = array(
    "Computer Science" => array("Monday: 9am-11am", "Wednesday: 1pm-3pm", "Friday: 10am-12pm"),
    "Mathematics" => array("Tuesday: 10am-12pm", "Thursday: 2pm-4pm"),
    "Physics" => array("Monday: 1pm-3pm", "Wednesday: 9am-11am"),
    "Chemistry" => array("Tuesday: 1pm-3pm", "Thursday: 9am-11am")
);

// Payment of dues with a button to submit student number
function paymentDues($studentNumber) {
    // Code to process payment of dues
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Website</title>
    <link rel="stylesheet" href=""C:\xampp\htdocs\forms\style.css"">
</head>
<body>


<h1>Welcome to the Faculty Website</h1>
<section id="faculty">
            <h2>FACULTY DETAIL</h2>

Computer Science Faculty<br><br>

MISSION STATEMENT:<br>
The Computer Science faculty is dedicated to providing high-quality education, fostering innovative research, and promoting interdisciplinary collaboration in the field of computer science. Our mission is to prepare students for successful careers in technology, advance knowledge through cutting-edge research, and serve the community through outreach and engagement.<br><br>

FACULTY MEMBERS:<br>
- Dr. John Smith, Professor and Department Chair<br>
  - Areas of expertise: Artificial Intelligence, Machine Learning<br>
- Dr. Emily Johnson, Associate Professor<br>
  - Areas of expertise: Data Science, Database Systems<br>
- Dr. Michael Lee, Assistant Professor<br>
  - Areas of expertise: Cybersecurity, Network Security<br>
- Dr. Sarah Patel, Lecturer<br>
  - Areas of expertise: Software Engineering, Web Development<br><br>

DEGREE PROGRAMS:<br>
- Bachelor of Science in Computer Science
- Master of Science in Computer Science
- Ph.D. in Computer Science<br><br>

RESEARCH AREAS:<br>
1. Artificial Intelligence and Machine Learning<br>
2. Data Science and Big Data Analytics<br>
3. Cybersecurity and Network Security<br>
4. Software Engineering and Development<br>
5. Human-Computer Interaction<br>
6. Cloud Computing and Distributed Systems<br>
7. Computer Vision and Image Processing<br>
8. Bioinformatics and Computational Biology<br><br>

FACILITIES:<br>
- State-of-the-art computer labs equipped with the latest hardware and software.<br>
- Research centers and institutes dedicated to various areas of computer science.<br>
- Collaboration spaces for students and faculty to work on projects and research initiatives.<br><br>

STUDENT ORGANIZATION:<br>
- Association for Computing Machinery (ACM) Student Chapter<br>
- Women in Computer Science (WiCS)<br>
- Cybersecurity Club<br>
- Data Science Club<br><br>

INDUSTRY PARTNERSHIPS:<br>
The Computer Science faculty maintains strong partnerships with industry leaders, providing students with internship opportunities, guest lectures, and collaborative research projects. Partnerships include companies in technology, finance, healthcare, and government sectors.<br><br>

COMMUNITY ENGAGEMENT:<br>
- Outreach programs aimed at promoting computer science education in K-12 schools.<br>
- Hosting workshops, seminars, and coding competitions for local community members.<br>
- Collaborating with non-profit organizations to address societal challenges through technology solutions.<br><br>

ACCREDITATIONS:<br>
- Accredited by the Accreditation Board for Engineering and Technology (ABET).<br>
- Recognized by industry associations and professional societies.<br><br>

CONCLUSION:<br>
The Computer Science faculty is committed to excellence in education, research, and service. Through rigorous academic programs, cutting-edge research, and meaningful community engagement, we strive to empower students, advance knowledge, and make a positive impact on society through technology.<br><br></section>




<section id="timetables">
<h2>Student Timetables</h2>
<p>View and download student timetables here.</p>

<a href="#">Download Timetable PDF</a>

<table id ="1">
<tr>
<th>Day/Time</th>
<th>Course 1</th>
<th>Course 2 </th>

<tr>

<td>Monday 9:00 AM - 11:00 AM </td>

<td>Biology 101 </td>

<td>Chemistry 201 </td>


<tr>

<td>Tuesday 10:00 AM - 12:00 PM </td>

<td>Mathematics 301 </td>

<td>Physics 401 </td>


<tr>


<td>Wednesday 11:00 AM - 1:00 PM </td>


<td>Literature 201 </td>


<td>History 101 </td>



<tr>


<td>Thursday 9:00 AM - 11:00 AM </td>


<td>Economics 301 </td>


<td>Sociology 201 </td>



<tr>


<td>Friday 10:00 AM -12:00 PM  /  Saturday 9:00AM-11AM     / Sunday- Holiday    
   
   
   
   
   
   

 
 
 
 
 
 
 
 
 
 
 
                                                      

    


    


    


    


    


    


    


    

       

       

       

       

       

       

       



   
   
   
   
   
   



  




  




  




  




  




  




  




  



 





 





 





 





 





 





 



                                                      

    


    


    


    


    


    


    



<tr>




<tr>




<tr>




<tr>




<tr>




<th colspan=3 >Note : The timetable is subject to change. Please check regularly for updates.</th>


<h2>Departments:</h2>
<ul>
    <?php foreach ($departments as $department) : ?>
        <li><?php echo $department; ?></li>
        <ul>
            <?php foreach ($timetables[$department] as $timetable) : ?>
                <li><?php echo $timetable; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</ul>

<h2>Payment of Dues:</h2>
<form method="post">
<table>



<section id="payments-dues">
<h2>Payments Dues</h2>

<p>Please make payments for the following items:</p>

<ul>



<li>Tuition fees for the current semester.</li>



<li>Late fees for overdue payments.</li>



<li>Dormitory fees if applicable.</li>



<li>Miscellaneous expenses such as library fines, sports equipment, etc.</li>



<ul>




<footer>&copy; Faculty Website | All Rights Reserved.</footer>


    <label for="studentNumber">Enter Student Number:</label><br>
    <input type="text" id="studentNumber" name="studentNumber"><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $studentNumber = $_POST['studentNumber'];
    
    // Call the paymentDues function with the student number
    paymentDues($studentNumber);
}
?>

</body>
</html>

