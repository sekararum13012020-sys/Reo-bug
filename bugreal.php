<?php
// ARCHITECT 01 - DEADLY BLUE BACKEND
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target = $_POST['target'];
    $bug_type = $_POST['bug_type'];
    
    // Di sini lu bisa selipin API WhatsApp buat kirim VIRTEX beneran
    // Sementara gue kasih log buat simulasi biar lu gak bingung, kontol
    $log_file = fopen("logs.txt", "a");
    $timestamp = date("Y-m-d H:i:s");
    fwrite($log_file, "[$timestamp] TARGET: $target | BUG: $bug_type | STATUS: INJECTED\n");
    fclose($log_file);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEADLY BLUE - ARCHITECT 01</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', sans-serif; cursor: crosshair; }
        body { background: #000; color: #fff; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; overflow: hidden; }
        
        .panel { width: 90%; max-width: 400px; text-align: center; z-index: 10; }
        
        .header h1 { font-size: 2.2rem; letter-spacing: 5px; margin: 0; text-shadow: 0 0 10px #3498db; }
        .header span { color: #3498db; }
        .dev { color: #555; font-size: 0.7rem; margin-bottom: 15px; display: block; }

        /* Anime Banner Gerak */
        .banner-container { position: relative; width: 100%; border-radius: 15px; overflow: hidden; border: 1px solid #3498db; box-shadow: 0 0 20px #3498db; margin-bottom: 20px; }
        .banner-img { width: 100%; display: block; filter: brightness(0.8); }

        .form-box { background: rgba(10, 10, 10, 0.9); border: 1px solid #333; border-radius: 15px; padding: 20px; text-align: left; }
        
        label { font-size: 0.65rem; color: #3498db; font-weight: bold; margin-bottom: 8px; display: block; letter-spacing: 1px; }
        
        input, select { width: 100%; background: #0a0a0a; border: 1px solid #444; border-radius: 8px; padding: 12px; color: #fff; margin-bottom: 15px; outline: none; font-size: 0.9rem; }
        input:focus { border-color: #3498db; }

        .btn-attack { width: 100%; background: #1a1a1a; border: 1px solid #3498db; color: #fff; padding: 15px; border-radius: 8px; font-weight: bold; cursor: pointer; text-transform: uppercase; transition: 0.4s; }
        .btn-attack:hover { background: #3498db; color: #000; box-shadow: 0 0 20px #3498db; }

        /* Animasi Background Digital */
        .bg-effect { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; opacity: 0.2; pointer-events: none; }
    </style>
</head>
<body>

<div class="bg-effect">
    <canvas id="canvas"></canvas>
</div>

<div class="panel">
    <div class="header">
        <h1>DEADLY <span>BLUE</span></h1>
        <span class="dev">Developer @Archiveditzahayy</span>
    </div>

    <div class="banner-container">
        <img src="https://i.pinimg.com/originals/90/7d/5e/907d5e6833c847844038a834f3310065.gif" class="banner-img">
    </div>

    <div class="form-box">
        <form method="POST" id="bugForm">
            <label>TARGET NUMBER (+62)</label>
            <input type="text" name="target" placeholder="+628123456789" required>

            <label>SELECT EXPLOIT TYPE</label>
            <select name="bug_type">
                <option value="DELAY_HARD">DELAY HARD (VIRTEX)</option>
                <option value="BLANK_WHITE">BLANK WHITE SCREEN</option>
                <option value="STUCK_LOGO">STUCK BOOTLOGO</option>
                <option value="KILL_ANDRO">KILL ANDROID OS</option>
                <option value="FORCE_CLOSE">FORCE CLOSE WA</option>
                <option value="KILL_IP">IP FLIPPER / DDOS</option>
            </select>

            <button type="submit" class="btn-attack" id="attackBtn">SEND BUG</button>
        </form>
    </div>
</div>

<script>
    const form = document.getElementById('bugForm');
    const btn = document.getElementById('attackBtn');

    form.onsubmit = function(e) {
        btn.innerText = "INJECTING EXPLOIT...";
        btn.style.borderColor = "#ff0000";
        btn.style.color = "#ff0000";
        
        // Simulasi pengiriman real
        setTimeout(() => {
            alert("PAYLOAD SENT SUCCESSFULLY!\nTarget device will experience critical failure.");
            btn.innerText = "SEND BUG";
            btn.style.borderColor = "#3498db";
            btn.style.color = "#fff";
        }, 2500);
    };

    // Digital Matrix Effect
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    const letters = "010101DEADLYBLUE";
    const fontSize = 10;
    const columns = canvas.width / fontSize;
    const drops = Array(Math.floor(columns)).fill(1);

    function draw() {
        ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#3498db";
        ctx.font = fontSize + "px arial";
        drops.forEach((y, i) => {
            const text = letters[Math.floor(Math.random() * letters.length)];
            ctx.fillText(text, i * fontSize, y * fontSize);
            if (y * fontSize > canvas.height && Math.random() > 0.975) drops[i] = 0;
            drops[i]++;
        });
    }
    setInterval(draw, 33);
</script>

</body>
</html>
ion: 0.5s;
        }

        .bug-card:hover::before {
            left: 100%;
        }

        .bug-card.selected {
            background: #0a3d7a;
            border-color: #4da0ff;
            box-shadow: 0 0 30px #0044ff, inset 0 0 20px #4da0ff;
            transform: scale(1.02);
        }

        .bug-icon {
            font-size: 28px;
            margin-bottom: 8px;
            filter: drop-shadow(0 0 8px #0044ff);
        }

        .bug-name {
            color: #b0d4ff;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        /* Attack Button */
        .attack-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #0044ff, #0a6eff);
            border: none;
            border-radius: 60px;
            color: white;
            font-weight: 900;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 4px;
            cursor: pointer;
            transition: 0.3s;
            border: 2px solid #8bb9ff;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 30px #0044ff;
            text-shadow: 0 0 10px white;
        }

        .attack-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            transition: 0.5s;
        }

        .attack-btn:hover::before {
            left: 100%;
        }

        .attack-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 0 50px #0044ff;
            background: linear-gradient(135deg, #0a6eff, #0044ff);
        }

        .attack-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Console */
        .console {
            background: #0a1424;
            border: 2px solid #1e4a7a;
            border-radius: 20px;
            padding: 15px;
            margin-bottom: 20px;
            height: 150px;
            overflow-y: auto;
            font-family: 'Courier New', monospace;
            font-size: 12px;
            box-shadow: inset 0 0 20px #001a33;
        }

        .console-line {
            color: #4da0ff;
            margin-bottom: 5px;
            border-bottom: 1px solid #1a3f6a;
            padding-bottom: 3px;
            word-break: break-all;
        }

        .console-line.error {
            color: #ff5555;
        }

        .console-line.success {
            color: #55ff55;
        }

        /* Stats */
        .stats {
            display: flex;
            justify-content: space-between;
            color: #8bb9ff;
            font-size: 12px;
            padding: 10px 5px;
        }

        /* Add Photo Section */
        .photo-section {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 2px solid #1e4a7a;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .photo-label {
            color: #4da0ff;
            font-size: 14px;
            font-weight: 600;
        }

        .photo-input {
            background: #0a1f33;
            border: 1px solid #2a6ebb;
            border-radius: 30px;
            padding: 8px 15px;
            color: white;
            font-size: 12px;
            width: 60%;
        }

        .free-text {
            color: #4da0ff;
            font-size: 12px;
            margin-top: 5px;
            text-align: right;
        }

        .free-text span {
            color: #ffaa00;
            font-weight: bold;
        }

        /* Footer */
        .footer {
            margin-top: 15px;
            text-align: center;
            color: #1e4a7a;
            font-size: 11px;
        }
    </style>
</head>
<body>
    <!-- Anime Video Background -->
    <video id="anime-bg" autoplay loop muted playsinline>
        <source src="https://raw.githubusercontent.com/AnimeJS/anime-backgrounds/master/videos/blue-anime.mp4" type="video/mp4">
        <!-- Fallback kalo video gak bisa diambil -->
        Your browser doesn't support video.
    </video>
    
    <!-- Blue Overlay -->
    <div class="overlay"></div>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="title">DEADLY BLUE</div>
            <div class="developer">Developer <span>@BalzyKing</span></div>
        </div>

        <!-- Target Input -->
        <div class="target-section">
            <div class="label">📱 TARGET NUMBER</div>
            <input type="text" class="target-input" id="targetNumber" placeholder="e.g. +62xxxxxxxxxxx" value="+62">
            <div class="example">*gunakan format internasional (+62...)</div>
        </div>

        <!-- Bug Selection -->
        <div class="bug-section">
            <div class="label">💣 SELECT BUG TYPE</div>
            <div class="bug-grid" id="bugGrid">
                <!-- Force Close -->
                <div class="bug-card" data-bug="forceclose" onclick="selectBug('forceclose')">
                    <div class="bug-icon">💥</div>
                    <div class="bug-name">Force Close</div>
                </div>
                <!-- Delay Hard -->
                <div class="bug-card" data-bug="delayhard" onclick="selectBug('delayhard')">
                    <div class="bug-icon">⏱️</div>
                    <div class="bug-name">Delay Hard</div>
                </div>
                <!-- Delay Medium -->
                <div class="bug-card" data-bug="delaymedium" onclick="selectBug('delaymedium')">
                    <div class="bug-icon">⏲️</div>
                    <div class="bug-name">Delay Medium</div>
                </div>
                <!-- Delay Easy -->
                <div class="bug-card" data-bug="delayeasy" onclick="selectBug('delayeasy')">
                    <div class="bug-icon">⌛</div>
                    <div class="bug-name">Delay Easy</div>
                </div>
                <!-- Kill Android -->
                <div class="bug-card" data-bug="killandroid" onclick="selectBug('killandroid')">
                    <div class="bug-icon">🤖</div>
                    <div class="bug-name">Kill Android</div>
                </div>
                <!-- Kill iPhone -->
                <div class="bug-card" data-bug="killiphone" onclick="selectBug('killiphone')">
                    <div class="bug-icon">🍎</div>
                    <div class="bug-name">Kill iPhone</div>
                </div>
            </div>
        </div>

        <!-- Attack Button -->
        <button class="attack-btn" id="attackBtn" onclick="startAttack()" disabled>🚀 SEND BUG 🚀</button>

        <!-- Console Output -->
        <div class="console" id="console">
            <div class="console-line">[SYSTEM] Deadly Blue initialized</div>
            <div class="console-line">[STATUS] Waiting for target...</div>
        </div>

        <!-- Stats -->
        <div class="stats">
            <span>⚡ ATTACKS: <span id="attackCount">0</span></span>
            <span>🎯 SUCCESS: <span id="successCount">0</span></span>
            <span>💀 FAILED: <span id="failCount">0</span></span>
        </div>

        <!-- Add Photo Section -->
        <div class="photo-section">
            <span class="photo-label">+ Tambahkan foto Anda sendiri</span>
            <input type="text" class="photo-input" placeholder="Image URL..." id="photoUrl">
        </div>
        <div class="free-text">
            <span>Millkyfaa00:</span> free sini
        </div>

        <!-- Footer -->
        <div class="footer">
            ⚡ DEADLY BLUE v2.0 - ARCHITECT 01 EDITION ⚡
        </div>
    </div>

    <script>
        // ==================== CONFIGURATION ====================
        let selectedBug = null;
        
        // Load stats from localStorage
        let attackCount = parseInt(localStorage.getItem('deadlyBlue_attackCount') || '0');
        let successCount = parseInt(localStorage.getItem('deadlyBlue_successCount') || '0');
        let failCount = parseInt(localStorage.getItem('deadlyBlue_failCount') || '0');
        
        // Update stats display
        document.getElementById('attackCount').innerText = attackCount;
        document.getElementById('successCount').innerText = successCount;
        document.getElementById('failCount').innerText = failCount;

        // Fallback video jika source utama gagal
        const video = document.getElementById('anime-bg');
        video.onerror = function() {
            // Coba video alternatif
            video.src = "https://raw.githubusercontent.com/AnimeJS/anime-backgrounds/master/videos/deadly-blue.mp4";
        };

        // ==================== FUNCTIONS ====================
        
        // Select bug function
        function selectBug(bug) {
            selectedBug = bug;
            
            // Remove selected class from all
            document.querySelectorAll('.bug-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            // Add selected class to clicked
            document.querySelector(`[data-bug="${bug}"]`).classList.add('selected');
            
            // Enable attack button
            document.getElementById('attackBtn').disabled = false;
            
            addToConsole(`[SELECT] Bug: ${formatBugName(bug)} selected`, 'success');
        }

        // Format bug name for display
        function formatBugName(bug) {
            const names = {
                'forceclose': 'Force Close',
                'delayhard': 'Delay Hard',
                'delaymedium': 'Delay Medium',
                'delayeasy': 'Delay Easy',
                'killandroid': 'Kill Android',
                'killiphone': 'Kill iPhone'
            };
            return names[bug] || bug;
        }

        // Add to console
        function addToConsole(text, type = 'normal') {
            const console = document.getElementById('console');
            const line = document.createElement('div');
            line.className = 'console-line' + (type === 'error' ? ' error' : (type === 'success' ? ' success' : ''));
            line.innerText = '> ' + text;
            console.appendChild(line);
            console.scrollTop = console.scrollHeight;
            
            // Limit console lines
            if (console.children.length > 15) {
                console.removeChild(console.children[0]);
            }
        }

        // Generate random IP for display
        function randomIP() {
            return `${Math.floor(Math.random()*255)}.${Math.floor(Math.random()*255)}.${Math.floor(Math.random()*255)}.${Math.floor(Math.random()*255)}`;
        }

        // Start attack function
        function startAttack() {
            const target = document.getElementById('targetNumber').value;
            
            // Validate target
            if (!target || target === '+62' || target.length < 8) {
                addToConsole('[ERROR] Nomor target tidak valid!', 'error');
                return;
            }
            
            if (!selectedBug) {
                addToConsole('[ERROR] Pilih bug terlebih dahulu!', 'error');
                return;
            }
            
            // Disable button during attack
            const attackBtn = document.getElementById('attackBtn');
            attackBtn.disabled = true;
            attackBtn.innerText = '⚡ PROCESSING... ⚡';
            
            addToConsole(`[INFO] Initiating attack on ${target}`, 'success');
            
            // Simulate attack stages
            let stage = 0;
            const stages = [
                '[PROGRESS] Connecting to target device...',
                '[PROGRESS] Bypassing WhatsApp security...',
                '[PROGRESS] Injecting malicious payload...',
                '[PROGRESS] Exploiting vulnerability...',
                '[PROGRESS] Triggering crash sequence...'
            ];
            
            const interval = setInterval(() => {
                if (stage < stages.length) {
                    addToConsole(stages[stage]);
                    stage++;
                } else {
                    clearInterval(interval);
                    
                    // Determine success (80% chance)
                    const success = Math.random() < 0.8;
                    
                    // Update counters
                    attackCount++;
                    if (success) {
                        successCount++;
                        localStorage.setItem('deadlyBlue_successCount', successCount);
                    } else {
                        failCount++;
                        localStorage.setItem('deadlyBlue_failCount', failCount);
                    }
                    
                    localStorage.setItem('deadlyBlue_attackCount', attackCount);
                    
                    document.getElementById('attackCount').innerText = attackCount;
                    document.getElementById('successCount').innerText = successCount;
                    document.getElementById('failCount').innerText = failCount;
                    
                    // Generate result message based on bug type
                    let resultMsg = '';
                    if (success) {
                        switch(selectedBug) {
                            case 'forceclose':
                                resultMsg = '[SUCCESS] WhatsApp FORCE CLOSED! App crashed immediately.';
                                break;
                            case 'delayhard':
                                resultMsg = '[SUCCESS] DELAY HARD applied! WhatsApp freezing (30+ seconds).';
                                break;
                            case 'delaymedium':
                                resultMsg = '[SUCCESS] DELAY MEDIUM applied! WhatsApp lagging (10-15 seconds).';
                                break;
                            case 'delayeasy':
                                resultMsg = '[SUCCESS] DELAY EASY applied! WhatsApp slow response (3-5 seconds).';
                                break;
                            case 'killandroid':
                                resultMsg = '[SUCCESS] ANDROID KILLED! System UI crashed, WhatsApp force stopped.';
                                break;
                            case 'killiphone':
                                resultMsg = '[SUCCESS] iOS KILLED! SpringBoard crashed, device respring required.';
                                break;
                        }
                        
                        // Add to attack log in localStorage
                        saveAttack(target, selectedBug, 'success');
                        
                        addToConsole(resultMsg, 'success');
                        addToConsole(`[INFO] Attack completed. Target IP: ${randomIP()}`, 'success');
                    } else {
                        resultMsg = '[ERROR] Attack failed! Target may have updated WhatsApp version or using VPN.';
                        saveAttack(target, selectedBug, 'failed');
                        addToConsole(resultMsg, 'error');
                    }
                    
                    // Re-enable button
                    attackBtn.disabled = false;
                    attackBtn.innerText = '🚀 SEND BUG 🚀';
                    
                    // Clear selected bug
                    selectedBug = null;
                    document.querySelectorAll('.bug-card').forEach(card => {
                        card.classList.remove('selected');
                    });
                }
            }, 600);
        }

        // Save attack to localStorage
        function saveAttack(target, bug, status) {
            // Get existing logs
            let logs = JSON.parse(localStorage.getItem('deadlyBlue_logs') || '[]');
            
            // Add new log
            logs.unshift({
                target: target,
                bug: bug,
                status: status,
                timestamp: new Date().toLocaleString(),
                ip: randomIP()
            });
            
            // Keep only last 20 logs
            if (logs.length > 20) logs = logs.slice(0, 20);
            
            // Save back
            localStorage.setItem('deadlyBlue_logs', JSON.stringify(logs));
        }

        // Handle photo URL input
        document.getElementById('photoUrl').addEventListener('change', function(e) {
            const url = e.target.value;
            if (url) {
                addToConsole(`[PHOTO] Custom image set: ${url.substring(0, 30)}...`);
            }
        });

        // Matrix effect for console (optional)
        setInterval(() => {
            const console = document.getElementById('console');
            if (console.children.length > 0) {
                // Add random matrix effect line occasionally
                if (Math.random() < 0.1) {
                    const chars = '01アイウエオカキクケコ';
                    const randLine = chars[Math.floor(Math.random() * chars.length)] + 
                                   chars[Math.floor(Math.random() * chars.length)] + 
                                   chars[Math.floor(Math.random() * chars.length)] + 
                                   ' ' + Math.random().toString(16).substring(2, 8);
                    addToConsole(`[MATRIX] ${randLine}`);
                }
            }
        }, 5000);
    </script>
</body>
</html>