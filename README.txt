Admin Login:admin@admin.com
Admin Password: admin

User can be created.

Sample User Login: arjunabraham11@gmail.com
Sample User Password:arjun

-------------------------------------------------------------
UPDATES

Added Timer(Not Functioning Properly)
Added "Add Fill In Questions" to code as comment as it doesn't work.

-------------------------------------------------------------

FLOW OF EXECUTION


The first file to be opened is index.php. Here we have a registration page. Filling it will result in creation of an account and an email informing you of this will be sent to you(sendMail.php). 
You can also sign in as admin or user if you already have an account. If you sign in as user, you will be redirected to the exams page(account.php) where all available exams are shown. You can
also check your history(Marks you received in prev exams) and your ranking(Your rank with respect to other candidates). If you start an exam, You can answer the questions and have 
your mark recorded. In Admin Login, you can attempt the quizzes to review the questions and also do everything from user login(dash.php). However you can also add and remove quizzes. If you select 
Add MCQ quiz, you will have to fill in no of qns, Marks on correct and wrong answers etc. Then you add the questions and options and submit to add the quiz for everyone. Sign Up is managed by sign.php. 
Admin Login is managed by admin.php and user login by login.php. All logouts are managed by logout.php. Sign Up of user is managed by sign.php. 