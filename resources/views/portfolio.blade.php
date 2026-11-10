
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $profile['name'] }} - PHP and Laravel Developer Portfolio">

    <title>{{ $profile['name'] }} | Developer Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">

    <script src="{{ asset('js/portfolio.js') }}" defer></script>
</head>
<body>

    <header class="site-header" id="site-header">
        <nav class="nav container" aria-label="Main navigation">
            <a href="#home" class="logo">
                <span class="logo-mark">&lt;/&gt;</span>
                <span>{{ $profile['initials'] }}<span class="accent">.</span></span>
            </a>

            <div class="nav-links" id="nav-links">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>

            <div class="nav-actions">
                <button class="theme-toggle" id="theme-toggle" type="button" aria-label="Toggle color theme">
                    <span id="theme-icon">☀</span>
                </button>

                <button class="menu-toggle" id="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero section" id="home">
            <div class="hero-glow hero-glow-one"></div>
            <div class="hero-glow hero-glow-two"></div>

            <div class="container hero-grid">
                <div class="hero-content reveal">
                    <div class="availability">
                        <span class="status-dot"></span>
                        Open to opportunities
                    </div>

                    <p class="eyebrow">HELLO, I'M {{ strtoupper($profile['name']) }}</p>

                    <h1>
                        Building <span class="gradient-text">clean, modern</span>
                        digital experiences.
                    </h1>

                    <p class="hero-description">
                        {{ $profile['description'] }}
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">
                            Explore My Work <span aria-hidden="true">↗</span>
                        </a>

                        <a href="#contact" class="btn btn-outline">
                            Get in Touch
                        </a>
                    </div>

                    <div class="hero-meta">
                        <span>⌖ {{ $profile['location'] }}</span>
                        <span class="meta-divider"></span>
                        <span>{{ $profile['role'] }}</span>
                    </div>
                </div>

                <div class="hero-visual reveal">
                    <div class="visual-orbit orbit-one"></div>
                    <div class="visual-orbit orbit-two"></div>

                    <div class="code-card">
                        <div class="code-card-header">
                            <div class="window-dots">
                                <i></i><i></i><i></i>
                            </div>
                            <span>developer.php</span>
                            <span class="code-icon">⌘</span>
                        </div>

                        <div class="code-content">
                            <div><span class="line-number">01</span><span class="code-purple">&lt;?php</span></div>
                            <div><span class="line-number">02</span></div>
                            <div><span class="line-number">03</span><span class="code-purple">class</span> <span class="code-yellow">Developer</span></div>
                            <div><span class="line-number">04</span>{</div>
                            <div><span class="line-number">05</span>  <span class="code-blue">public</span> $passion = <span class="code-green">'Web Development'</span>;</div>
                            <div><span class="line-number">06</span>  <span class="code-blue">public</span> $stack = [</div>
                            <div><span class="line-number">07</span>    <span class="code-green">'PHP'</span>, <span class="code-green">'Laravel'</span>,</div>
                            <div><span class="line-number">08</span>    <span class="code-green">'MySQL'</span>, <span class="code-green">'JavaScript'</span></div>
                            <div><span class="line-number">09</span>  ];</div>
                            <div><span class="line-number">10</span>}</div>
                            <div><span class="line-number">11</span></div>
                            <div><span class="line-number">12</span><span class="code-purple">echo</span> <span class="code-green">"Let's build something."</span>;</div>
                        </div>

                        <div class="code-card-footer">
                            <span><span class="status-dot"></span> Available for work</span>
                            <span>PHP 8.x</span>
                        </div>
                    </div>

                    <div class="floating-label label-top">✦ Creative Developer</div>
                    <div class="floating-label label-bottom">◈ Clean Code</div>
                </div>
            </div>

            <a href="#about" class="scroll-indicator">
                <span>SCROLL TO EXPLORE</span>
                <span>↓</span>
            </a>
        </section>

        <section class="section about-section" id="about">
            <div class="container">
                <div class="section-heading reveal">
                    <span class="section-kicker">01 / ABOUT ME</span>
                    <h2>A little <span class="gradient-text">about me.</span></h2>
                    <p>Get to know the person behind the code.</p>
                </div>

                <div class="about-grid">
                    <div class="about-visual reveal">
                        <div class="about-avatar">
                            <span>{{ $profile['initials'] }}</span>
                            <div class="avatar-corner top-left"></div>
                            <div class="avatar-corner bottom-right"></div>
                        </div>
                        <div class="about-tag">Developer • Problem Solver</div>
                    </div>

                    <div class="about-content reveal">
                        <h3>Passionate about turning ideas into working products.</h3>

                        <p>
                            I'm a web developer based in {{ $profile['location'] }},
                            focused on building functional and visually engaging web applications.
                            I enjoy working across both backend logic and frontend interfaces.
                        </p>

                        <p>
                            My work includes appointment booking systems, e-commerce
                            experiences, and database-driven applications.
                            I care about writing maintainable code and continuously improving my skills.
                        </p>

                        <div class="about-details">
                            <div>
                                <span class="detail-label">SPECIALIZATION</span>
                                <strong>PHP / Laravel</strong>
                            </div>
                            <div>
                                <span class="detail-label">LOCATION</span>
                                <strong>{{ $profile['location'] }}</strong>
                            </div>
                            <div>
                                <span class="detail-label">FOCUS</span>
                                <strong>Full Stack Web Development</strong>
                            </div>
                            <div>
                                <span class="detail-label">EMAIL</span>
                                <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a>
                            </div>
                        </div>

                        <a href="#contact" class="text-link">
                            Let's work together <span>↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section skills-section" id="skills">
            <div class="container">
                <div class="section-heading reveal">
                    <span class="section-kicker">02 / MY TOOLKIT</span>
                    <h2>Skills & <span class="gradient-text">technologies.</span></h2>
                    <p>The tools and technologies I use to bring ideas to life.</p>
                </div>

                <div class="skills-grid">
                    @foreach ($skills as $category => $items)
                        <article class="skill-card reveal">
                            <div class="skill-card-top">
                                <span class="skill-icon">
                                    @if ($category === 'Backend')
                                        { }
                                    @elseif ($category === 'Frontend')
                                        &lt;/&gt;
                                    @else
                                        ⚙
                                    @endif
                                </span>
                                <span class="skill-count">{{ count($items) }} skills</span>
                            </div>

                            <h3>{{ $category }}</h3>

                            <div class="skill-tags">
                                @foreach ($items as $skill)
                                    <span class="skill-tag">{{ $skill }}</span>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section projects-section" id="projects">
            <div class="container">
                <div class="section-heading reveal">
                    <span class="section-kicker">03 / SELECTED WORK</span>
                    <h2>Featured <span class="gradient-text">projects.</span></h2>
                    <p>A selection of projects I've worked on and what I've built.</p>
                </div>

                <div class="projects-grid">
                    @foreach ($projects as $project)
                        <article class="project-card reveal">
                            <div class="project-cover cover-{{ $project['accent'] }}">
                                <span class="project-number">{{ $project['number'] }} / PROJECT</span>

                                <div class="project-cover-content">
                                    <span class="cover-symbol">
                                        @if ($project['accent'] === 'blue')
                                            ✚
                                        @elseif ($project['accent'] === 'purple')
                                            ◈
                                        @else
                                            ◉
                                        @endif
                                    </span>
                                    <span class="cover-title">{{ $project['title'] }}</span>
                                    <span class="cover-category">{{ $project['category'] }}</span>
                                </div>

                                <div class="cover-decoration"></div>
                            </div>

                            <div class="project-body">
                                <span class="project-category">{{ $project['category'] }}</span>
                                <h3>{{ $project['title'] }}</h3>
                                <p>{{ $project['description'] }}</p>

                                <div class="project-tags">
                                    @foreach ($project['tags'] as $tag)
                                        <span>{{ $tag }}</span>
                                    @endforeach
                                </div>

                                <div class="project-actions">
                                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer">
                                        GitHub <span>↗</span>
                                    </a>

                                    @if ($project['demo'])
                                        <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer">
                                            Live Demo <span>↗</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="more-projects reveal">
                    <p>Want to explore more of my work?</p>
                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                        View GitHub Profile ↗
                    </a>
                </div>
            </div>
        </section>

        <section class="section contact-section" id="contact">
            <div class="container">
                <div class="contact-panel reveal">
                    <div class="contact-glow"></div>

                    <span class="section-kicker">04 / LET'S CONNECT</span>

                    <h2>Have an idea?<br><span class="gradient-text">Let's build it.</span></h2>

                    <p>
                        I'm always interested in learning about new projects,
                        opportunities, and collaborations. Feel free to reach out.
                    </p>

                    <a class="btn btn-primary contact-button" href="mailto:{{ $profile['email'] }}">
                        Say Hello <span>↗</span>
                    </a>

                    <div class="contact-socials">
                        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                        <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
                        <a href="mailto:{{ $profile['email'] }}">Email ↗</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <a href="#home" class="logo">
                <span class="logo-mark">&lt;/&gt;</span>
                <span>{{ $profile['initials'] }}<span class="accent">.</span></span>
            </a>

            <p>© {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel.</p>

            <a href="#home" class="back-to-top">Back to top ↑</a>
        </div>
    </footer>

</body>
</html>
