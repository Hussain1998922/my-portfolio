

@extends('layouts.masterlayout')

@section('content')
 <div class="container py-5">
    <h1 class="text-center mb-1">Hussain Majeed</h1>
    <p class="text-center text-muted">Software Engineer</p>

    <div class="text-center mb-4">
        <p>
            220 Haider Road, Township, Lahore, Pakistan<br>
            <strong>Phone:</strong> +92 318 0041018 |
            <strong>Email:</strong> hussainmajeed119@gmail.com
        </p>
    </div>

    <!-- Professional Summary -->
    <section class="mb-4">
        <h4 class="section-title">Professional Summary</h4>
        <p>
            A passionate and detail-oriented Software Engineer with a strong foundation in programming, algorithms, and software design.
            I excel at solving complex challenges and delivering scalable, efficient, and user-centric software solutions.
            With hands-on experience across diverse projects and a commitment to continuous learning, I am eager to contribute to a forward-thinking development team.
        </p>
    </section>

    <!-- Technical Skills -->
    <section class="mb-4">
        <h4 class="section-title">Technical Skills</h4>
        <div>
            <span class="badge bg-primary badge-skill">Python</span>
            <span class="badge bg-primary badge-skill">Java</span>
            <span class="badge bg-primary badge-skill">C++</span>
            <span class="badge bg-primary badge-skill">React</span>
            <span class="badge bg-primary badge-skill">Django</span>
            <span class="badge bg-primary badge-skill">MySQL</span>
            <span class="badge bg-primary badge-skill">WordPress</span>
        </div>
    </section>

    <!-- Work Experience -->
    <section class="mb-4">
        <h4 class="section-title">Work Experience</h4>

        <div class="mb-3">
            <h5 class="mb-1">Admin Officer — Smart School Chunian Campus</h5>
            <p class="text-muted">Mar 2024 – Ongoing</p>
            <ul>
                <li>Managed and organized administrative tasks of the school</li>
                <li>Handled student admissions and maintained enrollment records</li>
                <li>Supervised clerical staff and delegated tasks</li>
                <li>Maintained student and staff records (both physical and digital)</li>
                <li>Oversaw fee collection and coordinated with the accounts department</li>
                <li>Ensured smooth communication between parents, staff, and principal</li>
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="mb-1">Web Development Intern — TechTrend Solutions</h5>
            <p class="text-muted">Dec 2023 – Mar 2024</p>
            <ul>
                <li>Developed web applications using Django and MySQL</li>
                <li>Designed front-end with HTML, CSS, and JavaScript</li>
                <li>Participated in code reviews and followed scalable practices</li>
            </ul>
        </div>

        <div class="mb-3">
            <h5 class="mb-1">WordPress Development Intern — iVision IT Hub</h5>
            <p class="text-muted">Aug 2023 – Dec 2023</p>
            <ul>
                <li>Developed and customized WordPress websites</li>
                <li>Debugged and tested for optimal functionality</li>
                <li>Learned front-end and back-end workflows</li>
            </ul>
        </div>
    </section>

    <!-- Education -->
    <section class="mb-4">
        <h4 class="section-title">Education</h4>
        <ul>
            <li><strong>B.S. Software Engineering</strong> — Ziauddin University, Karachi (2020 – 2024)</li>
            <li><strong>Intermediate (Pre-Engineering)</strong> — Govt. ISC, Shahdadpur, BISE Mirpurkhas (2017 – 2019)</li>
        </ul>
    </section>

    <!-- Certifications -->
    <section class="mb-4">
        <h4 class="section-title">Certifications</h4>
        <ul>
            <li>Certified Python Developer — Coursera (Issued: 2023)</li>
            <li>Blockchain Fundamentals — Online Certification Program (Issued: 2024)</li>
        </ul>
    </section>

    <!-- Languages -->
    <section class="mb-4">
        <h4 class="section-title">Languages</h4>
        <ul>
            <li>Urdu (Native)</li>
            <li>English (Fluent)</li>
        </ul>
    </section>

    <div class="text-center mt-5">
        <a href="{{ url('/index') }}" class="btn btn-secondary">← Back to Home</a>
    </div>
</div>

@endsection


   
