<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Portfolio</title>
</head>
<body>

    <div class="container-fluid p-5  bg-primary text-white text-center">
        <h1>Lawrence Jeremy Poliquit</h1>
        <p>Junior Software Developer</p>
    </div>
   
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>About Me</h3>
                <p>Hello, I'm Lawrence Jeremy Poliquit, a dedicated and enthusiastic junior developer with a strong foundation in computer science. My journey into the world of coding began during my undergraduate years, where I had the privilege of studying computer science and gaining a solid understanding of the fundamentals.</p> <br>
                
                <h5>What I Bring to the Table</h5>
                <ul>
                    <li><b>Solid Foundation:</b> 
                    <p>My computer science degree has equipped me with a deep understanding of algorithms, data structures, and software engineering principles. This academic background has provided me with a strong foundation to build upon.</p></li>

                    <li><b>Passion for Innovation:</b> 
                    <p>I am driven by a passion for innovation and a desire to create software solutions that make a difference. I thrive on tackling complex problems and finding efficient, elegant solutions.</p></li>

                    <li><b>Collaborative Spirit: </b> 
                    <p>I understand the value of teamwork and effective communication. I'm eager to work alongside others, learn from their expertise, and contribute to the success of the team.</p></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>My Educational Journey</h3>
                <p>During my time as an undergraduate, I delved deep into computer science, immersing myself in a variety of courses that honed my skills. I gained expertise in programming languages like Java, C++, and Python. While I haven't had the opportunity to gain real-world experience through internships just yet, my academic journey has provided me with a strong theoretical foundation.</p> <br>

                <p>My coursework challenged me to solve complex problems, develop algorithms, and think critically. This educational experience has prepared me for the practical challenges of the software development world, and I'm excited to apply my knowledge and contribute to meaningful projects in the future.</p>
            </div>
            <div class="col-sm-4">
                <h3>Technical Skills</h3>
                <h6>Programming Languages:</h6>
                <ul>
                    <li>Proficient in Java, experienced with Python, and familiar with C++.</li>
                </ul>
                
                <h6>Web Development:</h6>
                <ul>git push -u <remote-name> <branch-name>
                    <li>Experienced in HTML, CSS, JavaScript, Bootstrap, and W3CSS.</li>
                </ul>
                <h6>Windows Desktop Application:</h6>
                <ul>
                    <li>Experienced in creating Windows desktop applications with Java Swing.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5 p-5">
        <h2>Contact Me</h2>
        <form action="/_blank">
            <div class="mb-3 mt-3">
                <label for="emai">Email:</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Enter email">
                </div>
                
                
                <label for="emai">Subject:</label>
                <input type="text" class="form-control" placeholder="Enter subject">
            </div>

            <div class="mb-3 mt-3">
                <textarea class="form-control" name="text" id="message" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
    </div>
    
    <footer>
        <div class="container-fluid p-5 text-white text-center " style="background-color: #333">
            <p>@All right reserve</p>
        </div>
    </footer>

</body>
</html>