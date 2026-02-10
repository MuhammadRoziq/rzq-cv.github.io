<?php
// ==================== PHP DATA & CONFIGURATION ====================
session_start();

// Data Personal
$personal_info = [
    'name' => 'Muhammad Maftukh Inda Roziq',
    'title' => 'Fresh Graduate yang siap untuk mencari pengalaman di dunia Technology',
    'email' => 'muhammadroziq1453.2007@gmail.com',
    'phone' => '+62 882-006-995-824',
    'location' => 'Kabupaten Semarang, Jawa Tengah, Indonesia',
    'website' => 'portfolio.maftukhroziq.dev',
    'photo' => '',
    'linkedin' => 'linkedin.com/in/maftukhroziq'
];

// Social Media Links
$social_links = [
    ['icon' => 'fab fa-linkedin', 'url' => 'https://linkedin.com/in/maftukhroziq', 'text' => 'LinkedIn'],
    ['icon' => 'fab fa-github', 'url' => 'https://github.com/maftukhroziq', 'text' => 'GitHub'],
    ['icon' => 'fab fa-whatsapp', 'url' => 'https://wa.me/62882006995824', 'text' => 'WhatsApp'],
    ['icon' => 'fas fa-envelope', 'url' => 'mailto:muhammadroziq1453.2007@gmail.com', 'text' => 'Email']
];

// Profil Singkat (Elevator Pitch)
$elevator_pitch = [
    'title' => 'Professional Profile',
    'description' => 'Memiliki pengalaman 1+ tahun sebagai Trouble Shooting Specialist dan Web Developer. Ahli dalam pemecahan masalah teknis, pengembangan website, dan sistem administrasi. Memiliki kemampuan komunikasi yang baik, pekerja keras, dan berkomitmen untuk memberikan solusi teknologi yang efektif dan efisien.'
];

// Skills dengan kategori
$skills = [
    'technical' => [
        ['name' => 'HTML/CSS', 'level' => 95, 'icon' => 'fab fa-html5'],
        ['name' => 'JavaScript', 'level' => 85, 'icon' => 'fab fa-js'],
        ['name' => 'PHP', 'level' => 88, 'icon' => 'fab fa-php'],
        ['name' => 'MySQL', 'level' => 90, 'icon' => 'fas fa-database'],
        ['name' => 'Network Troubleshooting', 'level' => 92, 'icon' => 'fas fa-network-wired'],
        ['name' => 'System Administration', 'level' => 85, 'icon' => 'fas fa-server']
    ],
    'soft_skills' => [
        ['name' => 'Problem Solving', 'level' => 95],
        ['name' => 'Communication', 'level' => 90],
        ['name' => 'Teamwork', 'level' => 88],
        ['name' => 'Time Management', 'level' => 92],
        ['name' => 'Adaptability', 'level' => 87]
    ],
    'tools' => [
        'VS Code', 'Git/GitHub', 'XAMPP', 'Figma', 'Microsoft Office'
    ]
];

// Pengalaman Kerja (diperbarui)
$experiences = [
    [
        'position' => 'IT Support Specialist',
        'company' => 'Dinas Lingkungan Hidup Salatiga',
        'start_date' => 'Juli 2024',
        'end_date' => 'Oktober 2024',
        'description' => 'Bertanggung jawab dalam pemeliharaan dan troubleshooting perangkat TI untuk mendukung operasional dinas. Pencapaian utama:',
        'achievements' => [
            'Mengurangi downtime sistem IT sebesar 40% melalui preventive maintenance',
            'Melakukan migrasi data penting dengan 100% tingkat keberhasilan',
            'Menyusun dokumentasi teknis untuk standar operasional'
        ],
        'technologies' => ['Network Troubleshooting', 'Hardware Maintenance', 'Windows OS', 'Data Backup']
    ],
    [
        'position' => 'Freelance Web Developer',
        'company' => 'Proyek Independen',
        'start_date' => 'Juli 2025',
        'end_date' => 'Sekarang',
        'description' => 'Mengembangkan website custom untuk berbagai klien UMKM dan startup. Fokus pada solusi bisnis digital:',
        'achievements' => [
            'Mengembangkan 5+ website responsif dengan waktu penyelesaian rata-rata 30% lebih cepat',
            'Meningkatkan engagement klien melalui UI/UX yang user-friendly',
            'Memberikan konsultasi teknis dan strategi digital untuk pengembangan bisnis'
        ],
        'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap', 'WordPress']
    ],
];

// Pendidikan (diperbarui)
$education = [
    [
        'SMK' => 'Pemograman Perangkat Lunak dan Gim ( PPLG/RPL )',
        'Study' => 'SMK Telekomunikasi Tunas Harapan',
        'year' => '2022 - 2025',
        'description' => 'Transkrip Nilai: 88,67 Fokus studi pada pengembangan web, jaringan komputer, dan manajemen database.',
    ],
];

// Portfolio (Proyek Website yang telah dibuat)
$portfolio = [
    [
        'title' => 'Website Toko Pakaian PT-Texwel ',
        'description' => 'Website toko online fashion dengan sistem keranjang belanja, checkout, dan beli.',
        'category' => 'Web Development',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
        'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
        'demo_url' => 'index.html', // LINK KE FILE HTML YANG SUDAH DIBUAT
        'github_url' => '#',
        'features' => ['Responsive Design', 'Payment Gateway', 'Admin Panel', 'User Authentication']
    ],
    [
        'title' => 'Database Website Toko Pakaian PT-Texwel',
        'description' => 'Aplikasi web untuk mengelola stok barang, pemasukan dan pengeluaran inventori perusahaan.',
        'category' => 'Database Managemen',
        'technologies' => ['PHP', 'XAMPP', 'MySQL', 'Bootstrap'],
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
        'demo_url' => 'login.php',
        'github_url' => '#',
        'features' => ['Real-time Updates', 'Report Generation', 'Barcode Scanner', 'Multi-user']
    ],
    [
        'title' => 'Company Profile Perusahaan',
        'description' => 'Website profil perusahaan dengan halaman about, services, portfolio, dan contact form.',
        'category' => 'Corporate Website',
        'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'jQuery'],
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
        'demo_url' => '#',
        'github_url' => '#',
        'features' => ['SEO Friendly', 'Fast Loading', 'Mobile Responsive', 'Contact Form']
    ],
];

// Bahasa yang dikuasai
$languages = [
    ['name' => 'Bahasa Indonesia', 'level' => 'Native Speaker', 'proficiency' => 100],
    ['name' => 'Korea', 'level' => 'Professional Working Proficiency', 'proficiency' => 70],
    ['name' => 'English', 'level' => 'Professional Working Proficiency', 'proficiency' => 65],
    ['name' => 'Arabic', 'level' => 'Basic Communication', 'proficiency' => 60]
];

// Keahlian Khusus
$expertise = [
    'IT Troubleshooting & Support',
    'Web Application Development',
    'Database Design & Management',
    'Network Configuration',
    'System Administration',
    'Technical Documentation'
];

// Process Contact Form dengan pengiriman email ke alamat Anda
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING);
    
    $errors = [];
    
    if (empty($name)) $errors[] = 'Nama harus diisi';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid';
    if (empty($subject)) $errors[] = 'Subjek harus diisi';
    if (empty($message)) $errors[] = 'Pesan harus diisi';
    
    if (empty($errors)) {
        // Email penerima (email Anda)
        $to = 'muhammadroziq1453.2007@gmail.com';
        
        // Subject email
        $email_subject = "Pesan dari Website CV: " . $subject;
        
        // Isi email dengan format HTML
        $email_content = "
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #1a365d; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
                .content { background: #f8f9fa; padding: 20px; border-radius: 0 0 10px 10px; }
                .detail { margin-bottom: 15px; }
                .label { font-weight: bold; color: #1a365d; }
                .message-box { background: white; padding: 15px; border-left: 4px solid #2b6cb0; margin: 15px 0; }
                .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>📧 Pesan Baru dari Website CV</h2>
                </div>
                <div class='content'>
                    <div class='detail'>
                        <span class='label'>👤 Nama Pengirim:</span> $name
                    </div>
                    <div class='detail'>
                        <span class='label'>📧 Email Pengirim:</span> <a href='mailto:$email'>$email</a>
                    </div>
                    <div class='detail'>
                        <span class='label'>📱 Telepon:</span> " . ($phone ? $phone : '-') . "
                    </div>
                    <div class='detail'>
                        <span class='label'>📌 Subjek:</span> $subject
                    </div>
                    <div class='detail'>
                        <span class='label'>💬 Pesan:</span>
                    </div>
                    <div class='message-box'>
                        " . nl2br(htmlspecialchars($message)) . "
                    </div>
                    <div class='footer'>
                        <p>📨 Email ini dikirim dari form kontak website CV Muhammad Maftukh Inda Roziq</p>
                        <p>⏰ Waktu: " . date('d F Y H:i:s') . "</p>
                        <p>🌐 IP Pengirim: " . $_SERVER['REMOTE_ADDR'] . "</p>
                        <p>🔗 URL Halaman: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Unknown') . "</p>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Headers untuk email HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: CV Website <noreply@" . $_SERVER['HTTP_HOST'] . ">" . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        $headers .= "X-Priority: 1 (Highest)\r\n";
        $headers .= "X-MSMail-Priority: High\r\n";
        $headers .= "Importance: High\r\n";
        
        // Kirim email ke Anda
        $mail_sent = mail($to, $email_subject, $email_content, $headers);
        
        // Kirim email konfirmasi ke pengirim
        if ($mail_sent) {
            $user_subject = "📧 Terima Kasih Atas Pesan Anda - " . $personal_info['name'];
            $user_message = "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background: #1a365d; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
                    .content { background: #f8f9fa; padding: 20px; border-radius: 0 0 10px 10px; }
                    .footer { margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2>✅ Pesan Anda Telah Diterima</h2>
                    </div>
                    <div class='content'>
                        <p>Halo <strong>$name</strong>,</p>
                        
                        <p>Terima kasih telah menghubungi saya melalui website CV. Saya telah menerima pesan Anda dengan detail berikut:</p>
                        
                        <p><strong>📌 Subjek:</strong> $subject</p>
                        <p><strong>💬 Pesan:</strong> $message</p>
                        
                        <p>Saya akan membalas pesan Anda dalam waktu <strong>1x24 jam</strong> ke email ini.</p>
                        
                        <p>Anda juga dapat menghubungi saya langsung melalui:</p>
                        <ul>
                            <li>📱 WhatsApp: <a href='https://wa.me/62882006995824'>+62 882-006-995-824</a></li>
                            <li>📧 Email: <a href='mailto:muhammadroziq1453.2007@gmail.com'>muhammadroziq1453.2007@gmail.com</a></li>
                            <li>💼 LinkedIn: <a href='https://linkedin.com/in/maftukhroziq'>linkedin.com/in/maftukhroziq</a></li>
                        </ul>
                        
                        <p>Salam hormat,<br>
                        <strong>" . $personal_info['name'] . "</strong><br>
                        " . $personal_info['title'] . "</p>
                    </div>
                    <div class='footer'>
                        <p>Email ini dikirim secara otomatis dari sistem website CV " . $personal_info['name'] . ".</p>
                        <p>⏰ Waktu: " . date('d F Y H:i:s') . "</p>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            $user_headers = "MIME-Version: 1.0" . "\r\n";
            $user_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $user_headers .= "From: " . $personal_info['name'] . " <noreply@" . $_SERVER['HTTP_HOST'] . ">" . "\r\n";
            $user_headers .= "Reply-To: muhammadroziq1453.2007@gmail.com" . "\r\n";
            
            // Kirim email konfirmasi ke pengirim
            mail($email, $user_subject, $user_message, $user_headers);
        }
        
        // Simpan ke file sebagai backup
        $text_content = "================ PESAN BARU ================\n";
        $text_content .= "Waktu: " . date('Y-m-d H:i:s') . "\n";
        $text_content .= "Nama: $name\n";
        $text_content .= "Email: $email\n";
        $text_content .= "Telepon: $phone\n";
        $text_content .= "Subjek: $subject\n";
        $text_content .= "Pesan:\n$message\n";
        $text_content .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $text_content .= "Status Email: " . ($mail_sent ? "Terkirim" : "Gagal") . "\n";
        $text_content .= "===========================================\n\n";
        
        file_put_contents('contact_messages.txt', $text_content, FILE_APPEND);
        
        if ($mail_sent) {
            $_SESSION['message'] = [
                'type' => 'success',
                'text' => '✅ Pesan Anda telah berhasil dikirim! Saya akan menghubungi Anda dalam 1x24 jam. Cek email Anda untuk konfirmasi.'
            ];
        } else {
            $_SESSION['message'] = [
                'type' => 'error',
                'text' => '❌ Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti atau hubungi langsung via WhatsApp: <a href="https://wa.me/62882006995824" style="color: var(--secondary-color); text-decoration: underline;">Klik di sini</a>'
            ];
        }
        
        header('Location: ' . $_SERVER['PHP_SELF'] . '#contact');
        exit;
    } else {
        $_SESSION['message'] = [
            'type' => 'error',
            'text' => implode('<br>', $errors)
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Professional - Muhammad Maftukh Inda Roziq | Web Developer</title>
    <meta name="description" content="Portfolio dan CV Muhammad Maftukh Inda Roziq - IT Specialist & Web Developer Fresh Graduate">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2b6cb0;
            --accent-color: #3182ce;
            --light-color: #f7fafc;
            --dark-color: #2d3748;
            --success-color: #38a169;
            --text-color: #2d3748;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --frame-color: #e53e3e;
            --frame-width: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: var(--text-color);
            line-height: 1.7;
            font-size: 16px;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Modern dengan Typing Animation */
        header {
            background: linear-gradient(135deg, var(--primary-color), #2c5282);
            color: white;
            padding: 80px 0 60px;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(56, 178, 172, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(66, 153, 225, 0.1) 0%, transparent 50%);
        }

        .header-content {
            text-align: center;
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .profile-img-container {
            margin-bottom: 40px;
        }

        .profile-img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            overflow: hidden;
            border: 4px solid white;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .profile-img i {
            font-size: 90px;
            color: rgba(255,255,255,0.9);
        }

        .badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1rem;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-out 0.5s both;
        }

        /* Typing Animation Container */
        .typing-container {
            display: inline-block;
            margin: 0 auto;
            text-align: center;
            min-height: 120px;
            margin-bottom: 20px;
        }

        .name-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            display: inline-block;
            text-align: center;
            margin: 0;
            padding: 0;
            position: relative;
        }

        /* Individual letter styling for typing effect */
        .letter {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: letterAppear 0.3s forwards;
            color: white;
        }

        .letter.space {
            width: 15px;
        }

        @keyframes letterAppear {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cursor {
            display: inline-block;
            width: 3px;
            height: 60px;
            background-color: white;
            margin-left: 5px;
            animation: blink 1s infinite;
            vertical-align: middle;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        .tagline {
            font-size: 1.6rem;
            opacity: 0.9;
            margin: 30px auto;
            font-weight: 300;
            max-width: 600px;
            line-height: 1.5;
            animation: fadeInUp 1s ease-out 1.5s both;
        }

        .contact-info-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            margin-bottom: 35px;
            animation: fadeInUp 1s ease-out 2s both;
        }

        .contact-item-header {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            background: rgba(255,255,255,0.1);
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .contact-item-header:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }

        .contact-item-header i {
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            animation: fadeInUp 1s ease-out 2.5s both;
        }

        .social-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            background: rgba(255,255,255,0.1);
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: var(--transition);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .social-btn:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            animation: bounce 2s infinite;
            cursor: pointer;
            text-align: center;
            z-index: 10;
        }

        .scroll-indicator i {
            font-size: 1.5rem;
            display: block;
            margin-bottom: 5px;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(-10px) translateX(-50%); }
            60% { transform: translateY(-5px) translateX(-50%); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(20px);
            }
            to { 
                opacity: 1; 
                transform: translateY(0);
            }
        }

        /* Section Styles */
        section {
            padding: 80px 0;
        }

        .section-header {
            margin-bottom: 50px;
            text-align: center;
        }

        .section-title {
            font-size: 2.2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border-radius: 2px;
        }

        .section-subtitle {
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Profile Section */
        .profile-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .profile-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .highlight-card {
            background: linear-gradient(135deg, #f6f9ff, #edf2ff);
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid var(--secondary-color);
        }

        .highlight-card h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .skill-category {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .skill-category h3 {
            color: var(--primary-color);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .skill-name {
            font-weight: 600;
            color: var(--dark-color);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .skill-percentage {
            color: var(--secondary-color);
            font-weight: 700;
        }

        .skill-bar-container {
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
        }

        .skill-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 4px;
            width: 0;
            transition: width 1.5s ease-in-out;
        }

        .tools-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .tool-tag {
            background: #e6f7ff;
            color: var(--secondary-color);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid #bae7ff;
        }

        /* Experience Timeline */
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            padding-left: 80px;
        }

        .timeline-dot {
            position: absolute;
            left: 20px;
            top: 0;
            width: 24px;
            height: 24px;
            background: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            z-index: 2;
        }

        .timeline-content {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .timeline-date {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
        }

        .achievements-list {
            margin-top: 15px;
            padding-left: 20px;
        }

        .achievements-list li {
            margin-bottom: 8px;
            position: relative;
        }

        .achievements-list li::before {
            content: '✓';
            position: absolute;
            left: -20px;
            color: var(--success-color);
            font-weight: bold;
        }

        /* Education & Certifications */
        .edu-cert-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .education-card, .cert-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .education-card:hover, .cert-card:hover {
            transform: translateY(-5px);
        }

        .edu-icon, .cert-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .edu-icon i, .cert-icon i {
            font-size: 24px;
            color: white;
        }

        /* PORTFOLIO SECTION STYLES - UPDATED WITH FRAME DESIGN */
        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .filter-btn {
            padding: 10px 25px;
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            color: #4a5568;
            transition: var(--transition);
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--secondary-color);
            color: white;
            border-color: var(--secondary-color);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            transition: var(--transition);
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        /* Artistic Frame Design */
        .portfolio-frame {
            position: relative;
            padding: var(--frame-width);
            background: linear-gradient(145deg, #f0f0f0, #ffffff);
            border-radius: 25px;
            box-shadow: 
                0 20px 40px rgba(0,0,0,0.1),
                inset 0 1px 0 rgba(255,255,255,0.8),
                0 0 0 2px rgba(255,255,255,0.5),
                0 0 0 4px var(--frame-color);
            transition: var(--transition);
        }

        .portfolio-frame::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid rgba(255,255,255,0.7);
            border-radius: 18px;
            pointer-events: none;
        }

        .portfolio-frame::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 15px;
            pointer-events: none;
        }

        .portfolio-image {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(43, 108, 176, 0.9), rgba(66, 153, 225, 0.9));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 15px;
            padding: 20px;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-image img {
            transform: scale(1.1);
        }

        .portfolio-item:hover .portfolio-frame {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 
                0 30px 60px rgba(0,0,0,0.2),
                inset 0 1px 0 rgba(255,255,255,0.8),
                0 0 0 2px rgba(255,255,255,0.5),
                0 0 0 4px var(--frame-color),
                0 0 20px rgba(229, 62, 62, 0.3);
        }

        .portfolio-links {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .portfolio-link {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary-color);
            font-size: 1.2rem;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .portfolio-link:hover {
            transform: scale(1.1) rotate(5deg);
            background: var(--frame-color);
            color: white;
        }

        .portfolio-content {
            padding: 25px 0 15px;
        }

        .portfolio-category {
            display: inline-block;
            background: var(--frame-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .portfolio-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 15px 0;
        }

        .tech-badge {
            background: #e6f7ff;
            color: var(--secondary-color);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .portfolio-features {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
        }

        .feature-tag {
            background: #f0fff4;
            color: var(--success-color);
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            border: 1px solid #c6f6d5;
        }

        /* View Project Button */
        .view-project {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 25px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 15px;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(43, 108, 176, 0.3);
        }

        .view-project:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(43, 108, 176, 0.4);
        }

        /* Languages & Expertise */
        .languages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .language-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: var(--shadow);
        }

        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .expertise-item {
            background: #f8fafc;
            padding: 12px 20px;
            border-radius: 10px;
            border-left: 4px solid var(--secondary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Contact Form */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: flex-start;
            gap: 20px;
            transition: var(--transition);
        }

        .contact-card:hover {
            transform: translateY(-3px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-icon i {
            font-size: 20px;
            color: white;
        }

        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 14px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition);
            background: #f8fafc;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
            background: white;
            box-shadow: 0 0 0 3px rgba(43, 108, 176, 0.1);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(43, 108, 176, 0.2);
        }

        .btn-block {
            width: 100%;
            justify-content: center;
        }

        /* Message Styles */
        .alert {
            padding: 16px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 4px solid;
        }

        .alert-success {
            background-color: #f0fff4;
            border-color: #38a169;
            color: #2f855a;
        }

        .alert-error {
            background-color: #fff5f5;
            border-color: #fc8181;
            color: #c53030;
        }

        /* Footer */
        footer {
            background: var(--primary-color);
            color: white;
            padding: 50px 0 30px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 30px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #cbd5e0;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #a0aec0;
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            box-shadow: var(--shadow);
            z-index: 1000;
        }

        .back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-3px);
        }

        /* WhatsApp Floating Button */
        .whatsapp-float {
            position: fixed;
            bottom: 120px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.3);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            text-decoration: none;
            animation: pulse-whatsapp 2s infinite;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
            animation: none;
        }

        .whatsapp-float .tooltip {
            position: absolute;
            right: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--dark-color);
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            font-size: 0.9rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .whatsapp-float .tooltip::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -5px;
            transform: translateY(-50%) rotate(45deg);
            width: 10px;
            height: 10px;
            background: var(--dark-color);
        }

        .whatsapp-float:hover .tooltip {
            opacity: 1;
            visibility: visible;
            right: 75px;
        }

        @keyframes pulse-whatsapp {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .name-title {
                font-size: 2.8rem;
            }
            
            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }
            
            .timeline::before {
                left: 20px;
            }
            
            .timeline-item {
                padding-left: 60px;
            }
            
            .timeline-dot {
                left: 10px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .name-title {
                font-size: 2.2rem;
            }
            
            .tagline {
                font-size: 1.3rem;
            }
            
            .contact-info-header {
                flex-direction: column;
                align-items: center;
            }
            
            .portfolio-filter {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 100%;
                max-width: 200px;
                text-align: center;
            }
            
            .whatsapp-float {
                bottom: 100px;
                right: 20px;
                width: 55px;
                height: 55px;
                font-size: 26px;
            }
            
            .whatsapp-float:hover .tooltip {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .profile-img {
                width: 180px;
                height: 180px;
            }
            
            .profile-img i {
                font-size: 70px;
            }
            
            .name-title {
                font-size: 1.8rem;
            }
            
            .tagline {
                font-size: 1.1rem;
            }
            
            .social-btn {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
            
            .profile-card,
            .skill-category,
            .timeline-content,
            .contact-form {
                padding: 25px;
            }
            
            .contact-card {
                padding: 20px;
            }
            
            .portfolio-content {
                padding: 20px 0 10px;
            }
        }

        /* Print Styles */
        @media print {
            .back-to-top,
            .social-btn,
            .btn,
            .scroll-indicator,
            .whatsapp-float {
                display: none !important;
            }
            
            section {
                padding: 40px 0;
                break-inside: avoid;
            }
            
            .portfolio-card:hover,
            .timeline-content:hover {
                transform: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section dengan Typing Animation -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="profile-img-container">
                    <div class="profile-img">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </div>
                
                <span class="badge">Fresh Graduate</span>
                
                <div class="typing-container">
                    <h1 class="name-title" id="typing-name">
                        <!-- Nama akan diisi oleh JavaScript -->
                    </h1>
                    <span class="cursor" id="typing-cursor"></span>
                </div>
                
                <p class="tagline"><?php echo htmlspecialchars($personal_info['title']); ?></p>
                
                <div class="contact-info-header">
                    <div class="contact-item-header">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo htmlspecialchars($personal_info['email']); ?></span>
                    </div>
                    <div class="contact-item-header">
                        <i class="fas fa-phone"></i>
                        <span><?php echo htmlspecialchars($personal_info['phone']); ?></span>
                    </div>
                    <div class="contact-item-header">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo htmlspecialchars($personal_info['location']); ?></span>
                    </div>
                </div>
                
                <div class="social-links">
                    <?php foreach($social_links as $link): ?>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>" class="social-btn" target="_blank">
                            <i class="<?php echo htmlspecialchars($link['icon']); ?>"></i>
                            <span><?php echo htmlspecialchars($link['text']); ?></span>
                        </a>
                    <?php endforeach; ?>
                    <a href="#contact" class="social-btn" style="background: rgba(255,255,255,0.2);">
                        <i class="fas fa-paper-plane"></i>
                        <span>Hubungi Saya</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Profile Section -->
    <section id="profile">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Profil Profesional</h2>
                <p class="section-subtitle">Ringkasan kualifikasi dan keahlian utama</p>
            </div>
            
            <div class="profile-card">
                <p><?php echo htmlspecialchars($elevator_pitch['description']); ?></p>
                
                <div class="profile-highlights">
                    <div class="highlight-card">
                        <h4><i class="fas fa-bullseye"></i> Tujuan Karir</h4>
                        <p>Mencari pengalaman kerja apapun terutama di bidang IT untuk saat ini sebagai sebuah pengembangan diri untuk bekal masa depan yang semakin canggih seperti ini agar kita tidak diperbudak teknologi tapi kita yang membudak teknologi</p>
                    </div>
                    <div class="highlight-card">
                        <h4><i class="fas fa-star"></i> Keunggulan</h4>
                        <p>Kombinasi keahlian teknis dalam troubleshooting dan pengembangan web dengan soft skills yang kuat dalam komunikasi dan problem solving.</p>
                    </div>
                    <div class="highlight-card">
                        <h4><i class="fas fa-rocket"></i> Nilai Tambah</h4>
                        <p>Kemampuan memahami kebutuhan bisnis dan menerjemahkannya ke dalam solusi teknologi yang efektif dan scalable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Keahlian & Kompetensi</h2>
                <p class="section-subtitle">Kemampuan teknis dan profesional yang dikuasai</p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h3><i class="fas fa-code"></i> Technical Skills</h3>
                    <?php foreach($skills['technical'] as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">
                                    <?php if(isset($skill['icon'])): ?>
                                        <i class="<?php echo htmlspecialchars($skill['icon']); ?>"></i>
                                    <?php endif; ?>
                                    <?php echo htmlspecialchars($skill['name']); ?>
                                </span>
                                <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                            </div>
                            <div class="skill-bar-container">
                                <div class="skill-bar" data-level="<?php echo $skill['level']; ?>"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-users"></i> Soft Skills</h3>
                    <?php foreach($skills['soft_skills'] as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></span>
                                <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                            </div>
                            <div class="skill-bar-container">
                                <div class="skill-bar" data-level="<?php echo $skill['level']; ?>"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <h3 style="margin-top: 30px;"><i class="fas fa-tools"></i> Tools & Technologies</h3>
                    <div class="tools-list">
                        <?php foreach($skills['tools'] as $tool): ?>
                            <span class="tool-tag"><?php echo htmlspecialchars($tool); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Pengalaman Kerja</h2>
                <p class="section-subtitle">Jejak karir dan pencapaian profesional</p>
            </div>
            
            <div class="timeline">
                <?php foreach($experiences as $index => $exp): ?>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">
                                <?php echo htmlspecialchars($exp['start_date']); ?> - <?php echo htmlspecialchars($exp['end_date']); ?>
                            </span>
                            <h3><?php echo htmlspecialchars($exp['position']); ?></h3>
                            <h4 style="color: var(--secondary-color); margin-bottom: 15px;">
                                <?php echo htmlspecialchars($exp['company']); ?>
                            </h4>
                            <p><?php echo htmlspecialchars($exp['description']); ?></p>
                            
                            <?php if(!empty($exp['achievements'])): ?>
                                <ul class="achievements-list">
                                    <?php foreach($exp['achievements'] as $achievement): ?>
                                        <li><?php echo htmlspecialchars($achievement); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            
                            <?php if(!empty($exp['technologies'])): ?>
                                <div style="margin-top: 15px; display: flex; flex-wrap: wrap; gap: 8px;">
                                    <?php foreach($exp['technologies'] as $tech): ?>
                                        <span style="background: #e6f7ff; color: var(--secondary-color); padding: 4px 12px; border-radius: 15px; font-size: 0.85rem;">
                                            <?php echo htmlspecialchars($tech); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Education & Certifications -->
    <section id="education" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Pendidikan & Sertifikasi</h2>
                <p class="section-subtitle">Kualifikasi akademik dan profesional</p>
            </div>
            
            <div class="edu-cert-grid">
                <?php foreach($education as $edu): ?>
                    <div class="education-card">
                        <div class="edu-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3><?php echo htmlspecialchars($edu['SMK']); ?></h3>
                        <h4><?php echo htmlspecialchars($edu['Study']); ?></h4>
                        <p class="timeline-date"><?php echo htmlspecialchars($edu['year']); ?></p>
                        <p><?php echo htmlspecialchars($edu['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Portfolio & Proyek</h2>
                <p class="section-subtitle">Karya terbaik dalam pengembangan web dan sistem</p>
            </div>
            
            <!-- Filter Kategori (Optional) -->
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">Semua Proyek</button>
                <button class="filter-btn" data-filter="web-development">Web Development</button>
                <button class="filter-btn" data-filter="web-application">Web Application</button>
                <button class="filter-btn" data-filter="corporate">Corporate Website</button>
            </div>
            
            <div class="portfolio-grid">
                <?php foreach($portfolio as $item): ?>
                    <div class="portfolio-item" data-category="<?php echo strtolower(str_replace(' ', '-', $item['category'])); ?>">
                        <div class="portfolio-frame">
                            <div class="portfolio-image">
                                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                                <div class="portfolio-overlay">
                                    <div class="portfolio-links">
                                        <?php if(!empty($item['demo_url']) && $item['demo_url'] != '#'): ?>
                                            <a href="<?php echo htmlspecialchars($item['demo_url']); ?>" class="portfolio-link" target="_blank" title="Lihat Demo">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if(!empty($item['github_url']) && $item['github_url'] != '#'): ?>
                                            <a href="<?php echo htmlspecialchars($item['github_url']); ?>" class="portfolio-link" target="_blank" title="Source Code">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($item['demo_url']) && $item['demo_url'] != '#'): ?>
                                        <a href="<?php echo htmlspecialchars($item['demo_url']); ?>" class="view-project" target="_blank">
                                            <i class="fas fa-external-link-alt"></i> Lihat Proyek
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="portfolio-content">
                                <span class="portfolio-category"><?php echo htmlspecialchars($item['category']); ?></span>
                                <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                                <p><?php echo htmlspecialchars($item['description']); ?></p>
                                
                                <div class="portfolio-tech">
                                    <?php foreach($item['technologies'] as $tech): ?>
                                        <span class="tech-badge"><?php echo htmlspecialchars($tech); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                
                                <?php if(!empty($item['features'])): ?>
                                    <div class="portfolio-features">
                                        <?php foreach($item['features'] as $feature): ?>
                                            <span class="feature-tag"><?php echo htmlspecialchars($feature); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Languages & Expertise -->
    <section id="additional" style="background-color: #f8fafc;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Keahlian Tambahan</h2>
                <p class="section-subtitle">Kemampuan pendukung yang relevan dengan pekerjaan</p>
            </div>
            
            <div class="languages-grid">
                <div>
                    <h3 style="margin-bottom: 20px; color: var(--primary-color);">Bahasa</h3>
                    <?php foreach($languages as $lang): ?>
                        <div class="language-card">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                <span style="font-weight: 600;"><?php echo htmlspecialchars($lang['name']); ?></span>
                                <span style="color: var(--secondary-color); font-weight: 600;"><?php echo htmlspecialchars($lang['level']); ?></span>
                            </div>
                            <div style="height: 6px; background: #e2e8f0; border-radius: 3px; overflow: hidden;">
                                <div style="width: <?php echo $lang['proficiency']; ?>%; height: 100%; background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div>
                    <h3 style="margin-bottom: 20px; color: var(--primary-color);">Area Keahlian</h3>
                    <div class="expertise-grid">
                        <?php foreach($expertise as $item): ?>
                            <div class="expertise-item">
                                <i class="fas fa-check" style="color: var(--success-color);"></i>
                                <span><?php echo htmlspecialchars($item); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <h3 style="margin: 30px 0 20px; color: var(--primary-color);">Ketersediaan</h3>
                    <div class="language-card">
                        <p><strong>Status:</strong> Mencari pekerjaan penuh waktu</p>
                        <p><strong>Mulai Kerja:</strong> 2 minggu setelah diterima</p>
                        <p><strong>Tipe Pekerjaan:</strong> On-site, Hybrid, atau Remote</p>
                        <p><strong>Gaji Ekspektasi:</strong> Menyesuaikan standar perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hubungi Saya</h2>
                <p class="section-subtitle">Tersedia untuk kesempatan kerja dan kolaborasi</p>
            </div>
            
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-<?php echo $_SESSION['message']['type']; ?>">
                    <?php echo $_SESSION['message']['text']; ?>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            
            <!-- Informasi Pengiriman Email -->
            <div style="background: #e6f7ff; padding: 15px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid var(--secondary-color);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                    <i class="fas fa-info-circle" style="color: var(--secondary-color); font-size: 1.2rem;"></i>
                    <h4 style="margin: 0; color: var(--primary-color);">Informasi Pengiriman Email</h4>
                </div>
            
            </div>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p><?php echo htmlspecialchars($personal_info['email']); ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>Telepon/WhatsApp</h3>
                            <p><?php echo htmlspecialchars($personal_info['phone']); ?></p>
                            <div style="margin-top: 10px;">
                                <a href="https://wa.me/62882006995824" target="_blank" 
                                   style="display: inline-flex; align-items: center; gap: 8px; 
                                          color: #25D366; text-decoration: none; font-weight: 500; 
                                          padding: 5px 10px; background: rgba(37, 211, 102, 0.1); 
                                          border-radius: 8px;">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>Chat via WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Lokasi</h3>
                            <p><?php echo htmlspecialchars($personal_info['location']); ?></p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Waktu Respons</h3>
                            <p>1-2 jam kerja pada hari kerja</p>
                            <p style="font-size: 0.9rem; color: #718096;">Senin - Jumat, 09:00 - 18:00</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] . '#contact'; ?>">
                        <div class="form-group">
                            <label class="form-label">Nama Lengkap *</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required 
                                   value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required
                                   value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+62 882-006-995-824"
                                   value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Subjek *</label>
                            <input type="text" name="subject" class="form-control" placeholder="Tujuan komunikasi" required
                                   value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Pesan *</label>
                            <textarea name="message" class="form-control" placeholder="Jelaskan kebutuhan Anda..." rows="5" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>
                        
                        <button type="submit" name="contact_submit" class="btn btn-block">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan Sekarang
                        </button>
                        
                        <p style="text-align: center; margin-top: 15px; color: #718096; font-size: 0.9rem;">
                            *Data Anda akan dijaga kerahasiaannya dan akan dihapus setelah 30 hari
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <h3 style="color: white; margin-bottom: 10px;"><?php echo htmlspecialchars($personal_info['name']); ?></h3>
                    <p style="color: #cbd5e0;"><?php echo htmlspecialchars($personal_info['title']); ?></p>
                </div>
                
                <div class="footer-links">
                    <a href="#profile">Profil</a>
                    <a href="#experience">Pengalaman</a>
                    <a href="#skills">Keahlian</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#contact">Kontak</a>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($personal_info['name']); ?>. CV Professional Portfolio.</p>
                <p style="margin-top: 5px;">Terakhir diperbarui: <?php echo date('d F Y'); ?></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/62882006995824" class="whatsapp-float" target="_blank" title="Hubungi via WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="tooltip">Hubungi via WhatsApp</span>
    </a>

    <script>
        // ==================== TYPING ANIMATION ====================
        document.addEventListener('DOMContentLoaded', function() {
            // Typing animation for name
            const name = "<?php echo $personal_info['name']; ?>";
            const nameElement = document.getElementById('typing-name');
            const cursor = document.getElementById('typing-cursor');
            
            // Split name into letters
            const letters = name.split('');
            
            // Clear the name element
            nameElement.innerHTML = '';
            
            // Function to type each letter
            function typeLetter(index) {
                if (index < letters.length) {
                    const letterSpan = document.createElement('span');
                    letterSpan.className = 'letter';
                    
                    // Add space class for spaces
                    if (letters[index] === ' ') {
                        letterSpan.classList.add('space');
                        letterSpan.innerHTML = '&nbsp;';
                    } else {
                        letterSpan.textContent = letters[index];
                    }
                    
                    // Add animation delay
                    letterSpan.style.animationDelay = `${index * 0.1}s`;
                    
                    nameElement.appendChild(letterSpan);
                    
                    // Type next letter
                    setTimeout(() => typeLetter(index + 1), 100);
                } else {
                    // Animation complete, hide cursor after a delay
                    setTimeout(() => {
                        cursor.style.opacity = '0';
                        cursor.style.transition = 'opacity 0.5s';
                    }, 1000);
                }
            }
            
            // Start typing animation after a short delay
            setTimeout(() => typeLetter(0), 500);
            
            // Scroll to section function
            window.scrollToSection = function(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    const headerOffset = 80;
                    const elementPosition = section.offsetTop;
                    const offsetPosition = elementPosition - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            };

            // Back to Top Button
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            });
            
            backToTopButton.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Smooth Scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if(href === '#') return;
                    
                    e.preventDefault();
                    const targetElement = document.querySelector(href);
                    if(targetElement) {
                        const headerOffset = 80;
                        const elementPosition = targetElement.offsetTop;
                        const offsetPosition = elementPosition - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Animate skill bars on scroll
            const animateSkillBars = () => {
                const skillBars = document.querySelectorAll('.skill-bar');
                skillBars.forEach(bar => {
                    const level = bar.getAttribute('data-level');
                    bar.style.width = level + '%';
                });
            };

            // Portfolio Filter Functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    const filterValue = button.getAttribute('data-filter');
                    
                    portfolioItems.forEach(item => {
                        const category = item.getAttribute('data-category');
                        
                        if (filterValue === 'all' || category === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (entry.target.id === 'skills') {
                            animateSkillBars();
                        }
                        
                        // Add fade-in effect for cards
                        const cards = entry.target.querySelectorAll('.portfolio-item, .education-card, .cert-card');
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, index * 100);
                        });
                    }
                });
            }, observerOptions);

            // Observe sections
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                observer.observe(section);
                
                // Set initial state for animations
                const cards = section.querySelectorAll('.portfolio-item, .education-card, .cert-card');
                cards.forEach(card => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                });
            });

            // Form validation enhancement
            const contactForm = document.querySelector('form[method="POST"]');
            if (contactForm) {
                const inputs = contactForm.querySelectorAll('input, textarea');
                
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('focused');
                    });
                    
                    input.addEventListener('blur', function() {
                        if (!this.value) {
                            this.parentElement.classList.remove('focused');
                        }
                    });
                    
                    // Live validation for email
                    if (input.type === 'email') {
                        input.addEventListener('input', function() {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (this.value && !emailRegex.test(this.value)) {
                                this.style.borderColor = '#fc8181';
                            } else {
                                this.style.borderColor = '';
                            }
                        });
                    }
                });
            }

            // Print functionality
            const printButton = document.createElement('button');
            printButton.innerHTML = '<i class="fas fa-print"></i> Print CV';
            printButton.className = 'btn';
            printButton.style.position = 'fixed';
            printButton.style.bottom = '30px';
            printButton.style.left = '30px';
            printButton.style.zIndex = '1000';
            printButton.style.background = 'var(--dark-color)';
            
            printButton.addEventListener('click', () => {
                window.print();
            });
            
            document.body.appendChild(printButton);

            // Hover effect for timeline items
            const timelineItems = document.querySelectorAll('.timeline-content');
            timelineItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // WhatsApp Floating Button
            const whatsappFloat = document.querySelector('.whatsapp-float');
            if (whatsappFloat) {
                // Ensure WhatsApp button stays above other elements
                whatsappFloat.style.zIndex = '1001';
                
                // Add click event for analytics (optional)
                whatsappFloat.addEventListener('click', function() {
                    console.log('WhatsApp button clicked');
                    // You can add Google Analytics event tracking here
                });
            }

            // Initialize skill bars with animation
            setTimeout(animateSkillBars, 1000);
            
            // Initialize portfolio items with fade-in
            setTimeout(() => {
                portfolioItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }, 1500);
        });

        // Handle page load animations
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>