<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNCH.CC | PRIVATE T2 BASES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --accent: #00cec9;
            --dark: #121212;
            --darker: #0a0a0a;
            --light: #f5f6fa;
            --gray: #2d3436;
            --glass: rgba(30, 30, 40, 0.85);
            --glow: 0 0 15px rgba(108, 92, 231, 0.5);
        }

        body {
            background: linear-gradient(135deg, #1a0a2b, #0d0630, #0f172a);
            color: var(--light);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Floating Pixels */
        .pixel {
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 2px;
            z-index: -1;
            opacity: 0.5;
            animation: float 15s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0) translateX(0) rotate(0deg); }
            100% { transform: translateY(-100vh) translateX(100px) rotate(360deg); }
        }

        /* Floating Header */
        .floating-header {
            position: fixed;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(247, 147, 26, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(247, 147, 26, 0.3);
            border-radius: 50px;
            padding: 12px 25px;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .floating-header:hover {
            background: rgba(247, 147, 26, 0.25);
            box-shadow: 0 5px 25px rgba(247, 147, 26, 0.3);
        }

        .floating-header a {
            color: #f9c328;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .floating-header a:hover {
            color: white;
            text-shadow: 0 0 10px rgba(249, 195, 40, 0.8);
        }

        .floating-header i {
            font-size: 1.2rem;
        }

        /* Main Container */
        .container {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            width: 100%;
            background: rgba(15, 15, 25, 0.5);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(108, 92, 231, 0.2);
            margin-top: 30px;
        }

        /* Header */
        .header {
            padding: 25px;
            text-align: center;
            background: linear-gradient(135deg, rgba(108, 92, 231, 0.1), rgba(0, 206, 201, 0.1));
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            font-size: 3rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .logo h1 {
            font-size: 2.2rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
        }

        .logo p {
            color: var(--secondary);
            font-size: 1rem;
        }

        .logo-image {
            width: 260px;
            max-width: 70%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.45);
            filter: drop-shadow(0 0 18px rgba(108, 92, 231, 0.45));
        }

        /* Tabs */
        .tabs {
            display: flex;
            margin: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .tab-btn {
            flex: 1;
            padding: 18px 10px;
            background: transparent;
            border: none;
            color: var(--secondary);
            font-size: 1rem;
            cursor: pointer;
            position: relative;
            font-weight: 600;
            text-align: center;
        }

        .tab-btn.active {
            color: var(--primary);
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 3px 3px 0 0;
        }

        /* Content Area */
        .content {
            padding: 30px 25px;
            background: var(--glass);
            backdrop-filter: blur(10px);
            min-height: 500px;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.4s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--light);
            text-align: center;
        }

        .form-subtitle {
            color: var(--secondary);
            margin-bottom: 25px;
            font-size: 1rem;
            text-align: center;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
            font-size: 0.95rem;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent);
            font-size: 1.1rem;
        }

        .form-control {
            width: 100%;
            padding: 16px 16px 16px 50px;
            background: rgba(20, 20, 30, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: var(--light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: var(--glow);
        }

        .btn {
            display: block;
            width: 100%;
            padding: 16px;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 92, 231, 0.6);
        }

        .btn-alt {
            background: transparent;
            border: 2px solid var(--primary);
            margin-top: 10px;
        }

        /* Bitcoin Section */
        .btc-section {
            background: rgba(20, 20, 30, 0.7);
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            border: 1px solid rgba(247, 147, 26, 0.2);
        }

        .btc-title {
            font-size: 1.2rem;
            margin-bottom: 12px;
            color: #f7931a;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btc-address {
            background: rgba(247, 147, 26, 0.1);
            padding: 15px;
            border-radius: 8px;
            font-size: 0.95rem;
            word-break: break-all;
            font-family: monospace;
            color: #f7931a;
            margin: 12px 0;
            border: 1px solid rgba(247, 147, 26, 0.2);
            text-align: center;
            line-height: 1.5;
        }

        .copy-btn {
            background: linear-gradient(to right, #f7931a, #f9c328);
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
        }

        .copy-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(247, 147, 26, 0.4);
        }

        /* Instructions */
        .instructions {
            margin: 20px 0;
            padding: 18px;
            background: rgba(20, 20, 30, 0.7);
            border-radius: 12px;
            border-left: 4px solid var(--accent);
        }

        .instructions h3 {
            margin-bottom: 12px;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.2rem;
        }

        .instructions ol {
            padding-left: 20px;
            line-height: 1.6;
        }

        .instructions li {
            margin-bottom: 8px;
            padding-left: 8px;
            font-size: 0.95rem;
        }

        .instructions li::marker {
            color: var(--accent);
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: var(--secondary);
            font-size: 0.85rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(15, 15, 25, 0.5);
        }

        /* Mobile-Specific Styles */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .floating-header {
                padding: 10px 20px;
                font-size: 0.9rem;
                top: 10px;
            }
            
            .container {
                border-radius: 15px;
                margin-top: 50px;
            }
            
            .header {
                padding: 20px 15px;
            }
            
            .logo h1 {
                font-size: 1.8rem;
            }
            
            .content {
                padding: 25px 20px;
            }
            
            .tab-btn {
                padding: 16px 5px;
                font-size: 0.95rem;
            }
            
            .form-title {
                font-size: 1.6rem;
            }
            
            .btc-address {
                font-size: 0.9rem;
                padding: 12px;
            }
        }

        @media (max-width: 480px) {
            .floating-header {
                padding: 8px 15px;
                font-size: 0.8rem;
                top: 8px;
                width: 90%;
            }
            
            .floating-header a {
                font-size: 0.9rem;
            }
            
            .header {
                padding: 18px 10px;
            }
            
            .logo h1 {
                font-size: 1.6rem;
            }
            
            .logo-icon {
                font-size: 2.5rem;
            }
            
            .tab-btn {
                padding: 14px 5px;
                font-size: 0.9rem;
            }
            
            .content {
                padding: 20px 15px;
            }
            
            .form-title {
                font-size: 1.4rem;
            }
            
            .form-control {
                padding: 14px 14px 14px 45px;
                font-size: 0.95rem;
            }
            
            .btn {
                padding: 14px;
                font-size: 1rem;
            }
            
            .instructions {
                padding: 15px;
            }
            
            .instructions h3 {
                font-size: 1.1rem;
            }
            
            .instructions li {
                font-size: 0.9rem;
            }
            
            .btc-title {
                font-size: 1.1rem;
            }
            
            footer {
                padding: 15px;
                font-size: 0.8rem;
            }
        }

        /* Mobile Navigation Enhancements */
        .mobile-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            text-decoration: none;
            font-size: 0.9rem;
            gap: 6px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
            flex: 1;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--accent);
        }
    </style>
</head>
<body>
    <!-- Floating Pixels -->
    <div class="pixel" style="top: 10%; left: 5%; background-color: #6c5ce7; animation-duration: 25s;"></div>
    <div class="pixel" style="top: 20%; left: 80%; background-color: #00cec9; animation-duration: 30s;"></div>
    <div class="pixel" style="top: 50%; left: 15%; background-color: #a29bfe; animation-duration: 20s;"></div>
    <div class="pixel" style="top: 70%; left: 90%; background-color: #f7931a; animation-duration: 35s;"></div>
    <div class="pixel" style="top: 30%; left: 50%; background-color: #6c5ce7; animation-duration: 40s;"></div>
    <div class="pixel" style="top: 85%; left: 30%; background-color: #00cec9; animation-duration: 22s;"></div>

    <!-- Floating Header -->
    <div class="floating-header">
        <a href="https://dym168.org/punkemv" target="_blank">
            <i class="fas fa-external-link-alt"></i>
            PUNKEMV
        </a>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img class="logo-image" src="assets/login-hero.png" alt="PNCH login artwork">
                <div class="logo-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h1>PNCH.CC</h1>
                <p>Private T2 Bases</p>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-tab="login">Login</button>
            <button class="tab-btn" data-tab="register">Request Account</button>
        </div>
        
        <!-- Content Area -->
        <div class="content">
            <!-- Login Tab -->
            <div class="tab-content active" id="login-tab">
                <form id="login-form">
                    <div class="form-group">
                        <div class="input-with-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" id="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn">Login</button>
                        <button class="btn btn-alt">Forgot Password?</button>
                    </div>
                </form>

                <div class="mobile-nav">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shield-alt"></i> Security
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-question-circle"></i> Help
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </div>
            </div>
            
            <!-- Registration Tab -->
            <div class="tab-content" id="register-tab">
                <h2 class="form-title">Request New Account</h2>
                <p class="form-subtitle">Follow these steps to create your account</p>
                
                <div class="instructions">
                    <h3><i class="fas fa-info-circle"></i> Account Creation Process</h3>
                    <ol>
                        <li>Send Bitcoin payment to the address below</li>
                        <li>Contact me via Potato @cvvjedi with your payment TXID and desired username</li>
                        <li>I will manually verify your payment and create your account</li>
                        <li>You'll receive your login credentials via Potato DM within 24 hours</li>
                    </ol>
                </div>
                
                <div class="btc-section">
                    <div class="btc-title">
                        <i class="fab fa-bitcoin"></i>
                        <span>Send Bitcoin Payment To:</span>
                    </div>
                    <div class="btc-address" id="btc-address">bc1quuvy0juwq0wecee852377mccyc6prc42zn76kn</div>
                    <button class="copy-btn" id="copy-btn"><i class="fas fa-copy"></i> Copy Address</button>
                </div>
                
                <div class="instructions">
                    <h3><i class="fas fa-exclamation-triangle"></i> Important Notes</h3>
                    <ol>
                        <li>Do not share your credentials with anyone</li>
                        <li>Your account will be activated after manual verification</li>
                        <li>Contact me on Potato with your payment details</li>
                        <li>Minimum payment: 0.001 BTC (for demonstration only)</li>
                    </ol>
                </div>
                
                <div class="mobile-nav">
                    <a href="#" class="nav-link">
                        <i class="fab fa-bitcoin"></i> Bitcoin Help
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fab fa-discord"></i> Support
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-download"></i> Wallet
                    </a>
                </div>
            </div>
        </div>
        
        <footer>
            <p>Pnch.cc Secure Portal &copy; 2025 | Private T2 Bases</p>
        </footer>
    </div>

    <script>
        // Tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show corresponding content
                const tabId = btn.getAttribute('data-tab');
                document.getElementById(`${tabId}-tab`).classList.add('active');
            });
        });
        
        // Copy Bitcoin address functionality
        const copyBtn = document.getElementById('copy-btn');
        const btcAddress = document.getElementById('btc-address');
        
        copyBtn.addEventListener('click', () => {
            navigator.clipboard.writeText(btcAddress.textContent)
                .then(() => {
                    // Show feedback
                    const originalText = copyBtn.innerHTML;
                    copyBtn.innerHTML = '<i class="fas fa-check"></i> Copied!';
                    
                    setTimeout(() => {
                        copyBtn.innerHTML = originalText;
                    }, 2000);
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                });
        });
        
        // Form submission
        const loginForm = document.getElementById('login-form');
        
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simple validation
            if (username.trim() === '' || password.trim() === '') {
                alert('Please fill in all fields');
                return;
            }
            
            // Here you would normally send the data to your server
            // For this example, we'll just show a success message
            alert(`Login successful!\nUsername: ${username}\nThis is a frontend demo only.`);
        });
        
        // Create additional floating pixels
        function createPixels() {
            const colors = ['#6c5ce7', '#a29bfe', '#00cec9', '#f7931a'];
            const container = document.body;
            
            for (let i = 0; i < 12; i++) {
                const pixel = document.createElement('div');
                pixel.classList.add('pixel');
                
                // Random properties
                const size = Math.random() * 8 + 4;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const top = Math.random() * 100;
                const left = Math.random() * 100;
                const duration = Math.floor(Math.random() * 40 + 20);
                const delay = Math.random() * 5;
                
                pixel.style.width = `${size}px`;
                pixel.style.height = `${size}px`;
                pixel.style.backgroundColor = color;
                pixel.style.top = `${top}%`;
                pixel.style.left = `${left}%`;
                pixel.style.animationDuration = `${duration}s`;
                pixel.style.animationDelay = `${delay}s`;
                
                container.appendChild(pixel);
            }
        }
        
        // Initialize on load
        window.addEventListener('load', createPixels);
    </script>
</body>
</html>
