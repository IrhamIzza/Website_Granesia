<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudidayaaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budidaya')->insert([
            'id' => '1',
            'judul' => 'Oxalis',
            'diskripsi' => 'Bunga kupu kupu memiliki warna rona ungu yang kuat sehingga bisa menampilkan kesan mewah yang nggak berlebihan. Bunga yang kerap disebut sebagai purple shamrocks ini memiliki bentuk kelopak agak segitiga dan menyerupai sayap kupu kupu yang sedang mengepak. Karena alasan tersebutlah, tanaman ini lebih populer dikenal sebagai bunga kupu kupu di Indonesia. ',
            'text1' => 'Taruh di tempat yang sejuk',
            'text1b' => 'Tanaman ini bisa gampang layu karena terpapar banyak sinar matahari jika ditaruh di kawasan tropis seperti Indonesia. Jadi, lebih baik kamu menjadikan bunga kupu kupu sebagai tanaman hias indoor.',
            'text2' => 'Pastikan Tetap Kena Cahaya',
            'text2b' => 'Pemilihan tempat menaruh bunga kupu kupu di dalam ruangan juga sangat menentukan pertumbuhan tanaman ini. ',
            'text3' => 'Jangan Terlalu Sering Menyiram',
            'text3b' => 'Terlalu sering menyiram bunga kupu kupu justru bisa membuat akarnya gampang membusuk sehingga tanaman tersebut gampang mati.',
            'image' => 'img/budidaya/image 25.png',
            'slug' => 'Oxalis',
            ]);
        DB::table('budidaya')->insert([
            'id' => '2',
            'judul' => 'Sirih Belanda',
            'diskripsi' => 'Tanaman hias yang indah memang cocok untuk menjadi hiasan interior dan eksterior rumah. Salah satunya adalah sirih gading. Tanaman yang punya nama ilmiah epipremnum aureum ini merupakan salah satu tanaman hias populer yang mudah dirawat dan cepat tumbuh. Keindahannya sangat cocok untuk mendekorasi rumah. ',
            'text1' => 'Hindari menempatkan sirih gading di area yang terkena cahaya matahari langsung. Sirih gading paling baik ditempatkan di area yang tidak terkena cahaya matahari langsung.',
            'text1b' => 'Sirih gading paling baik ditempatkan di area yang tidak terkena cahaya matahari langsung. Tempatkan di tempat yang terang atau di sebagian lokasi matahari dengan perlindungan dari matahari sore.',
            'text2' => 'Tanam di tanah gembur dalam pot',
            'text2b' => 'Gunakan tanah gembur dan gambut untuk menanamnya di dalam pot. Jaga tanah tetap lembab. Cubit batang untuk mengendalikan pertumbuhannya sesuai kebutuhan. Tanaman ini mudah disebarkan dengan sistem tanam stek batang.',
            'text3' => ' Tempatkan di tempat yang terang atau di sebagian lokasi matahari dengan perlindungan dari matahari sore.',
            'text3b' => ' ',
            'image' => 'img/budidaya/image 24.png',
            'slug' => 'Sirih-Belanda',
            ]);
        DB::table('budidaya')->insert([
            'id' => '3',
            'judul' => 'Monstera Deliciosa',
            'diskripsi' => 'Pada dasarnya, tanaman Monstera deliciosa termasuk ke dalam salah satu tanaman yang merambat atau menjalar. Akar pada batangnya membuat tanaman ini bisa merambat dan menyerap air serta nutrisi agar bisa tumbuh berkembang. Inilah yang mendasari kepercayaan tradisional masyarakat Tiongkok bahwa monstera adalah simbol kesehatan, kemakmuran, dan penghormatan kepada leluhur.',
            'text1' => 'Berikan banyak cahaya dan kelembapan',
            'text1b' => 'Tempat yang paling baik untuk menyimpan monstera adalah ruangan dengan pencahayaan yang cukup namun cukup teduh.',
            'text2' => 'Perhatikan kadar air yang diberikan',
            'text2b' => 'Sebagian orang mungkin beranggapan bahwa semakin sering tanaman disiram, pertumbuhannya akan semakin baik. Namun faktanya, terlalu banyak memberikan air pada tanaman bisa membuatnya cepat mati. ',
            'text3' => 'Rawat daun monstera dengan saksama',
            'text3b' => 'Perhatikan warna daun. Warna daun yang menguning dan kering bisa berarti daun terkena udara panas atau dingin yang ekstrem. Faktor ini juga menyebabkan tanaman mulai layu dan turun dengan prematur.',
            'image' => 'img/budidaya/image 27.png',
            'slug' => 'Monstera-Deliciosa',
            ]);
        DB::table('budidaya')->insert([
            'id' => '4',
            'judul' => 'Kuping Gajah',
            'diskripsi' => 'Tanaman hias Kuping Gajah memiliki nama ilmiah Anthurium Crystallinum. Akhir-akhir ini sedang tren tanaman hias termasuk kuping gajah. Ciri khas dari tanaman ini yaitu warna daun hijau gelap seperti beludru dengan tulang daun berupa urat-urat hijau muda keputihan yang membentuk pola hiasan berwarna perak.',
            'text1' => 'Jangan terkena matahari secara langsung',
            'text1b' => 'Tempat budidaya yang cocok untuk tanaman kuping gajah adalah teduh alias tidak terkena sinar matahari langsung.',
            'text2' => 'Gunakan Media Tanah yang Bernutrisi dan Higienis',
            'text2b' => 'Tanah merupakan media tanam kuping gajah yang bagus untuk pertumbuhannya. Sebelum menanam, pastikan media tanahnya sudah steril dari bakteri ataupun jamur. ',
            'text3' => 'Selalu Bersihkan Daun Kuping Gajah dari Debu',
            'text3b' => 'Tanaman kuping gajah memiliki ukuran daun yang cukup besar. Hal ini memungkinkan debu atau kotoran semakin besar. Untuk itu, tanaman ini harus rajin membersihkan permukaan daun.',
            'image' => 'img/budidaya/image 26.png',
            'slug' => 'Kuping-Gajah',
            ]);

    }
}
