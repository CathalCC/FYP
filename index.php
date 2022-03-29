<?php
session_start();
    $_SESSION;
    
    include("Connector.php");
    include("Functions.php");
    
    $user_data = check_login($connect);
    
   if(!isset($_SESSION['id'])){
     header("Location: Register.php");
   }

?>
<html>
    <head>
        <title>Subject/Module Selection Site</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet'  href='css.css'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body class = "text">
    <div class = "bodytext">
        <div class = "header-box">
            <div class = "redirectbutton">
                <a href = "Log-out.php">Log-out</a>
            </div>
            <div class = "redirectbutton">
                <a href = "profile.php">Profile</a>
            </div>
        </div>
        <div id = "header">
        <h1>Contents list</h1>
        </div>
        <div id = "table" class = "maintext">
        <table cellspacing = "10">
            <thead>
                <tr> 
                    <th>
                        Content
                    </th>
                    <th>
                        Links
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        An explanation of how choosing your subject at NUIG works.
                        <a href = "subjectselect.php">Subject select</a>
                    </td>
                    <td>
                        <a href = #summary>Click here</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 1
                    </td>
                    <td>
                        <a href = #g1>Click here</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 2
                    </td>
                    <td>
                        <a href = #g2>Click here</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 3
                    </td>
                    <td>
                        <a href = #g3>Click here</a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 4
                    </td>
                    <td>
                        <a href = #g4>Click here</a> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 5
                    </td>
                    <td>
                        <a href = #g5>Click here</a> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 6
                    </td>
                    <td>
                        <a href = #g6>Click here</a> <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Group 7
                    </td>
                    <td>
                        <a href = #g7>Click here</a> <br>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        <div>
            <a href = "Log-in.php">Log in or register for an account here.</a>
        </div>
        <div>
            <a href = "Log-out.php">Click here to log out.</a>
        </div>
        <div id = "summary" class = "maintext">
        <h2 class = "headings">
            An explanation of how choosing your subject at NUIG works.
        </h2>
        <p>
            At NUIG, there are 24 subjects available for BA students to choose 
            from, and in the subjects you have chosen you will do a total of
            6 modules per semester, some being core modules which all students
            choosing the subject will do, alongside modules which students can
            choose themselves. The subjects available are divided into 7 groups,
            and students cannot choose more than one subject from each group.
            1st year students will pursue 3 subjects in their first year, while
            2nd and 3rd year students will pursue 2,taking one away from the 
            three subjects they had been doing in 1st year. For further details
            on these subjects, please continue reading to see how the subjects
            are divided among their respective groups, and to read up on each
            subject individually. If you would like to choose your subjects now
            click here to do so. You must be logged in to choose your subjects.
            
        </p>
        </div>
        <div id = "g1">
            <h2 class = "headings">
                Group 1
            </h2>
                <h3>
                    Archaeology
                </h3>
                    <p>
                        A subject about studying how human beings have adapted
                        to every conceivable environment and cultural
                        circumstance, how different peoples grappled with 
                        challenges as basic as survival and as abstract as the 
                        mysteries of the cosmos, archaeology is about 
                        understanding the forces that have shaped human
                        civilisation across the globe, and how this story is of
                        relevance today. A variety of postgraduate courses for
                        Archaeology are offered at NUIG for those who wish to 
                        stay with it after completing their BA. 
                        <br>
                        For those interested on reading further about the
                        discipline of Archaeology, including reading up on
                        contact information for the staff in the discipline
                        <a href = "https://www.nuigalway.ie/archaeology/">click 
                        here.</a>
                    </p>
                <h3>
                    French
                </h3>
                    <p>
                        We teach a wide range of courses related to France, 
                        and Francophone cultures in several Colleges of the
                        University.  We teach written and oral language courses,
                        literature, civilisation, linguistics, and other modules
                        which develop students' understanding of French and
                        Francophone culture.  We mainly teach through French. 
                        This subject also often involves learning abroad in
                        French-speaking countries.
                        <br>
                        For those interested on reading further about the
                        discipline of French, including reading up on
                        contact information for the staff in the discipline
                        <a href = "https://www.nuigalway.ie/french/">click 
                        here.</a>
                    </p>
                <h3>
                    Mathematics and Mathematical Studies
                </h3>
                    <p>
                        The BA Mathematics programme encourages Arts students
                        to develop their mathematical interests in a way that
                        emphasizes mathematical rigour, cultural context and
                        methodology of the subject. The programme is an option
                        in the BA (Joint-Honours) degree (GY101) and complements
                        other numerically based options such as Economics, 
                        Geography or Psychology Studies. The programme meets
                        the Teaching Council's subject requirements for teaching
                        mathematics at second level and is often taken in 
                        conjunction with one other core teaching subject such 
                        as English, Irish or a modern language.
                        But teaching is just one of many careers open
                        to mathematics graduates.
                        <br>
                        For those interested in reading further about the
                        school of Math, including reading up on
                        contact information for the staff in the subject
                        <a href = "https://www.nuigalway.ie/science/school-of-maths/">
                        click here.</a>
                    </p>
                <h3>
                    International Development
                </h3>
                    <p>
                        A subject for those who wish to have an impact on the 
                        lives of those in developing countries, this subject
                        focuses on human rights and works well for those who
                        are interested in studying abroad.
                        <br>
                        For those interested in reading more about the
                        International Development course
                        <a href = "https://www.nuigalway.ie/colleges-and-schools/arts-social-sciences-and-celtic-studies/geography-archaeology-irish-studies/disciplines/geography/courses/internationaldevelopment/">
                        click here </a>
                    </p>
        <div id = "g2">
            <h2 class = "headings">
                Group 2
            </h2>
                <h3>
                    Legal Studies
                </h3>
                    <p>
                        An ideal subject for those who wish to pursue a career
                        in law, this subject will provide students with a 
                        basis of legal understanding that will allow them to
                        move on to a career such as a barrister or solicitor.
                        <br>
                        For those interested in reading more on Law as a BA
                        subject, please <a href  = 
                        "https://www.nuigalway.ie/business-public-policy-law/school-of-law/courses/undergraduatecourses/arts.html">
                        click here.</a>
                    </p>
                <h3>
                    Psychology
                </h3>
                    <p>
                        For those who wish to pursue a career in fields such as
                        therapy or wish to take on a place in an organization
                        such as the Psychological Society of Ireland, this 
                        subject is ideal.
                        <br>
                        For any who wish to do more reading on
                        The School of Psychology at NUIG, please 
                        <a href = "https://www.nuigalway.ie/psychology/">
                        click here.
                        </a>
                    </p>
                <h3>
                    Celtic Civilisation
                </h3>
                    <p>
                        The study of the legacy of the Celts in the world,
                        from the earliest times when we first encounter them in
                        the writings of the ancient Greeks and Romans, right
                        down to the perceptions and beliefs about the 
                        Celts which prevail in modern times. This is a subject
                        well suited to those interested in Celtic history and
                        will be helpful to those aiming to pursue a career 
                        oriented around historical study.
                        <br>
                        For those who wish to read further on the subject, 
                        <a href ="https://www.nuigalway.ie/gaeilge/celtic-civilisation/index.html">
                        click here.
                        </a>
                    </p>
                <h3>
                    Performance and Screen Studies
                </h3>
                    <p>
                        A new subject at NUIG this year, Performance and 
                        Screen Studies will be an ideal fit for any wishing to
                        pursue a career in acting, writing of directing.
                        <br>
                        To learn more about this subject, you can
                        <a href = "https://www.nuigalway.ie/colleges-and-schools/arts-social-sciences-and-celtic-studies/english-creative-arts/newsubjectperformanceandscreenstudies/#">
                        click here.  
                        </a>
                    </p>
        </div>
        <div id = "g3">
            <h2 class = "headings">
                Group 3
            </h2>
                <h3>
                    Classics
                </h3>
                    <p>
                        The study of the ancient classics such as Homer or
                        Aristotle. Complements other subjects well, and suits
                        students with an interest in history or literature.
                        <br>
                        If you wish to learn more about this subject please
                        <a href = "https://www.nuigalway.ie/classics/">
                        click here.
                        </a>
                    </p>
                <h3>
                    Modern Irish Culture (Music and Literature)
                </h3>
                    <p>
                        For those who wish to pursue the study of the 
                        modern landscape of Irish culture, this subject is a 
                        good choice.
                        <br>
                        Learn more about this subject by 
                        <a href = "https://www.nuigalway.ie/colleges-and-schools/arts-social-sciences-and-celtic-studies/geography-archaeology-irish-studies/disciplines/irish-studies/undergraduate-courses/modernirishculturestudiesliteraturemusicbajointhonours/">
                        clicking here.</a>
                    </p>
                <h3>
                    Geography
                </h3>
                    <p>
                        Learn about the environment and the issues that face
                        it today such as climate change and geopolitical events
                        in this subject. 
                        <br>
                        Read more about The School of Geography by 
                        <a href = "https://www.nuigalway.ie/geography/">
                        clicking here.
                        </a>
                    </p>
                <h3>
                    German
                </h3>
                    <p>
                        Study the German language and its literature in this
                        subject. Well suited to any interested in studying 
                        abroad or learning about foreign literature.
                        <br>
                        You can learn more about German at NUIG by 
                        <a href = "https://www.nuigalway.ie/geography/">
                        clicking here.
                        </a>
                    </p>
                <h3>
                    Léann na Cumarsáide
                </h3>
                    <p>
                        A subject well suited to those experienced and 
                        passionate about the Irish language.
                        <br>
                        If this sounds like a subject you would be interested
                        in, please <a href = "https://www.nuigalway.ie/acadamh/cursai/cursai_ceime/leann_cumarsaide/">
                        click here</a>
                    </p>
                <h3>
                    Global Media
                </h3>
                    <p>
                        This subject revolves around teaching students to 
                        understand the many kinds of media that exist in the
                        world today, from interactive web media to film
                        studies.
                        <br>
                        If you wish to read more about Global Media,
                        <a href = "https://www.nuigalway.ie/acadamh/cursai/cursai_ceime/leann_cumarsaide/">
                        click here.
                        </a>
                    </p>
        </div>
        <div id = "g4">
            <h2 class = "headings">
                Group 4
            </h2>
                <h3>
                    English
                </h3>
                    <p>
                        Study a variety of works of poetry and literature
                        in this subject that will teach students to 
                        understand the art of writing.
                        <br>
                        If this interests you, you can 
                        <a href = "">click here</a> to learn more.
                    </p>
                <h3>
                    Economics
                </h3>
                    <p>
                        A subject teaching students to understand markets and 
                        economics from individual sectors to an international
                        level. 
                        <br>
                        <a href = "https://www.nuigalway.ie/business-public-policy-law/cairnes/subjectareas/economics/">
                        click here</a> if this subject interests you and you
                        wish to read more.
                    </p>
        </div>
        <div id = "g5">
            <h2 class = "headings">
                Group 5
            </h2>
                <h3>
                    Sociological and Political Studies
                </h3>
                    <p>
                        For those interested in learning how to understand the
                        sociopolitical landscape, this is the ideal subject.
                        <br>
                        If you would like to learn more, 
                        <a href = "https://www.nuigalway.ie/soc/">
                        click here.</a>
                    </p>
                <h3>
                    Information Technology
                </h3>
                    <p>
                        Learn skills like programming as well as 
                        learning more about the role computers have in the 
                        world today in this subject.
                        <br>
                        If you're interested in this subject, you can learn
                        more <a href = "https://www.nuigalway.ie/science-engineering/school-of-computer-science/programmes/undergraduateprogrammes/itasasubjectforartsstudents/">here.</a>
                    </p>
                <h3>
                    Léann an Aistriúchán
                </h3>
                    <p>
                        For those with a knowledge of the Irish language,
                        this subject will take great advantage of your 
                        existing skills.
                        <br>
                        Click <a href = "https://www.nuigalway.ie/acadamh/cursai/cursai_ceime/leann_aistriuchain/">here</a> to learn more.
                    </p>
        </div>
        <div id = "g6">
            <h2 class = "headings">
                Group 6
            </h2>
                <h3>
                    History
                </h3>
                <p>
                    For those with an interest in the past, NUIG offers the
                    opportunity to provide an education that will help you
                    learn to be a historian.
                    <br>
                    Click <a href = "https://www.nuigalway.ie/acadamh/cursai/cursai_ceime/leann_aistriuchain/">here</a> to learn more.
                <h3>
                    Spanish
                </h3>
                <p>
                    Learn about the Spanish language in this course.
                </p>
        </div>
        <div id = "g7">
            <h2 class = "headings">
                Group 7
            </h2>
            <h3>
                Gaeilge
            </h3>
            <p>
                For those who wish to learn the Irish language.
            </p>
            <h3>
                Italian
            </h3>
            <p>
                If you're interested in learning the Italian language, this will be ideal.
                Includes trips to Italy,
                making this a good fit for those with an interest in
                travelling.
            </p>
            <h3>
                Philosophy
            </h3>
            <p>
                Be taught in the ways of a variety of schools of philosophy
                with NUIG's teachings on the subject.
            </p>
        </div>
        </div>
    </div>
    </body>
</html>
