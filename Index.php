
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Prompt VEO3</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom CSS for Inter font */
        body {
            font-family: "Inter", sans-serif;
            background-color: #f0f4f8; /* Light gray background */
        }
        /* Hide scrollbar for a cleaner look */
        body::-webkit-scrollbar {
            display: none;
        }
        body {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl border border-gray-200">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Generator Prompt VEO3</h1>
        <p class="text-center text-gray-600 mb-8">Masukkan detail di bawah untuk menghasilkan prompt VEO3 Anda.</p>

        <div class="space-y-6">
            <!-- Input Bidang Keyword/Topik -->
            <div>
                <label for="keyword" class="block text-gray-700 text-sm font-medium mb-2">
                    Keyword/Topik Utama:
                </label>
                <input type="text" id="keyword" placeholder="Contoh: Manfaat AI dalam pendidikan"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
            </div>

            <!-- Input Bidang Target Audiens -->
            <div>
                <label for="audience" class="block text-gray-700 text-sm font-medium mb-2">
                    Target Audiens:
                </label>
                <input type="text" id="audience" placeholder="Contoh: Pelajar SMA, Guru, Orang Tua"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
            </div>

            <!-- Input Bidang Tujuan Konten -->
            <div>
                <label for="goal" class="block text-gray-700 text-sm font-medium mb-2">
                    Tujuan Konten (V):
                </label>
                <select id="goal"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                    <option value="">Pilih Tujuan</option>
                    <option value="Menginformasikan">Menginformasikan (Informative)</option>
                    <option value="Mendidik">Mendidik (Educational)</option>
                    <option value="Meyakinkan">Meyakinkan (Persuasive)</option>
                    <option value="Menghibur">Menghibur (Entertaining)</option>
                    <option value="Mendorong Tindakan">Mendorong Tindakan (Call to Action)</option>
                </select>
            </div>

            <!-- Input Bidang Gaya/Gaya Komunikasi (E) -->
            <div>
                <label for="style" class="block text-gray-700 text-sm font-medium mb-2">
                    Gaya/Gaya Komunikasi (E):
                </label>
                <select id="style"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                    <option value="">Pilih Gaya</option>
                    <option value="Formal">Formal</option>
                    <option value="Kasual">Kasual</option>
                    <option value="Profesional">Profesional</option>
                    <option value="Inspiratif">Inspiratif</option>
                    <option value="Lucu">Lucu</option>
                    <option value="Empati">Empati</option>
                </select>
            </div>

            <!-- Input Bidang Format Konten (O) -->
            <div>
                <label for="format" class="block text-gray-700 text-sm font-medium mb-2">
                    Format Konten (O):
                </label>
                <select id="format"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                    <option value="">Pilih Format</option>
                    <option value="Artikel Blog">Artikel Blog</option>
                    <option value="Skrip Video">Skrip Video</option>
                    <option value="Post Media Sosial">Post Media Sosial</option>
                    <option value="Infografis">Infografis</option>
                    <option value="Email Newsletter">Email Newsletter</option>
                    <option value="Presentasi">Presentasi</option>
                </select>
            </div>

            <!-- Input Bidang Poin-poin Kunci/Informasi Penting (3) -->
            <div>
                <label for="keyPoints" class="block text-gray-700 text-sm font-medium mb-2">
                    Poin-poin Kunci/Informasi Penting (Opsional):
                </label>
                <textarea id="keyPoints" rows="3" placeholder="Contoh: Sejarah AI, aplikasi AI di kelas, tantangan & solusi"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"></textarea>
            </div>

            <!-- Tombol Generate Prompt -->
            <button id="generatePromptBtn"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold py-3 rounded-lg shadow-md hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300 transform hover:scale-105">
                Generate Prompt VEO3
            </button>
        </div>

        <!-- Area Hasil Prompt -->
        <div class="mt-8">
            <label for="generatedPrompt" class="block text-gray-700 text-sm font-medium mb-2">
                Prompt VEO3 Anda:
            </label>
            <textarea id="generatedPrompt" rows="8" readonly
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-800 resize-none focus:outline-none"></textarea>
            <button id="copyPromptBtn"
                    class="mt-3 w-full bg-gray-300 text-gray-800 font-semibold py-2 rounded-lg shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition duration-200 transform hover:scale-100">
                Salin Prompt
            </button>
        </div>
    </div>

    <script>
        // Mendapatkan elemen-elemen DOM
        const keywordInput = document.getElementById('keyword');
        const audienceInput = document.getElementById('audience');
        const goalSelect = document.getElementById('goal');
        const styleSelect = document.getElementById('style');
        const formatSelect = document.getElementById('format');
        const keyPointsInput = document.getElementById('keyPoints');
        const generatePromptBtn = document.getElementById('generatePromptBtn');
        const generatedPromptTextarea = document.getElementById('generatedPrompt');
        const copyPromptBtn = document.getElementById('copyPromptBtn');

        /**
         * Fungsi untuk menghasilkan prompt VEO3 berdasarkan input pengguna.
         */
        function generateVEO3Prompt() {
            // Mengambil nilai dari setiap input
            const keyword = keywordInput.value.trim();
            const audience = audienceInput.value.trim();
            const goal = goalSelect.value;
            const style = styleSelect.value;
            const format = formatSelect.value;
            const keyPoints = keyPointsInput.value.trim();

            let prompt = "Buatkan konten ";

            // Menambahkan format konten
            if (format) {
                prompt += `${format}`;
            } else {
                prompt += "yang relevan";
            }

            // Menambahkan keyword/topik
            if (keyword) {
                prompt += ` tentang "${keyword}"`;
            }

            // Menambahkan target audiens
            if (audience) {
                prompt += ` untuk target audiens "${audience}"`;
            }

            // Menambahkan tujuan konten (V)
            if (goal) {
                prompt += ` dengan tujuan ${goal.toLowerCase()}`;
            }

            // Menambahkan gaya/gaya komunikasi (E)
            if (style) {
                prompt += ` dan gaya ${style.toLowerCase()}`;
            }

            // Menambahkan poin-poin kunci (3) jika ada
            if (keyPoints) {
                prompt += `. Sertakan poin-poin penting seperti: ${keyPoints}.`;
            } else {
                prompt += ".";
            }

            // Menampilkan prompt yang dihasilkan di textarea
            generatedPromptTextarea.value = prompt;
        }

        /**
         * Fungsi untuk menyalin teks prompt ke clipboard.
         * Menggunakan document.execCommand('copy') karena navigator.clipboard.writeText()
         * mungkin tidak berfungsi di dalam iframe.
         */
        function copyToClipboard() {
            generatedPromptTextarea.select(); // Memilih semua teks di textarea
            generatedPromptTextarea.setSelectionRange(0, 99999); // Untuk perangkat seluler
            document.execCommand('copy'); // Menyalin teks yang dipilih

            // Memberikan umpan balik kepada pengguna
            copyPromptBtn.textContent = 'Tersalin!';
            setTimeout(() => {
                copyPromptBtn.textContent = 'Salin Prompt';
            }, 2000); // Mengembalikan teks tombol setelah 2 detik
        }

        // Menambahkan event listener ke tombol "Generate Prompt"
        generatePromptBtn.addEventListener('click', generateVEO3Prompt);

        // Menambahkan event listener ke tombol "Salin Prompt"
        copyPromptBtn.addEventListener('click', copyToClipboard);

        // Panggil fungsi generateVEO3Prompt saat halaman pertama kali dimuat
        // Untuk memberikan prompt contoh atau prompt default
        window.onload = generateVEO3Prompt;
    </script>
</body>
</html>

