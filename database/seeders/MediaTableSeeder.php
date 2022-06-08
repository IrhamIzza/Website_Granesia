<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            'id' => '1',
            'judul' => 'Tanah',
            'text1' => 'Tanah liat merupakan jenis tanah yang berstektur paling halus dan lengket atau berlumpur. Karakteristik  dari tanah liat adalah memiliki pori-pori berukuran kecil (pori-pori mikro) yang lebih banyak dari pada pori-pori yang berukuran besar (pori-pori makro) sehingga memiliki kemampuan mengikat air yang cukup kuat. Pori-pori mikro adalah pori-pori halus yang berisi air kapiler atau udara. Sementara pori-pori makro adalah pori-pori kasar yang berisi udara atau air gravitasi yang mudah hilang. Ruang dari setiap pori-pori mikro berukuran  sangat sempit sehingga menyebabkan sirkulais atau  udara menjadi lamban.',
            'text2' => 'Pada dasarnya, tanah liat bersifat miskin unsur hara sehingga perlu dikombinasikan dengan bahan-bahan lain yang kaya akan unsur hara. Penggunaan tanah liat yang dikombinasikan dengan bahan-bahan lain seperti pasir dan humus sangat cocok dijadikan sebagai media penyemaian, cangkok, dan bonsai.',
            'image' => 'img/media/image 31.png',
            ]);
        DB::table('media')->insert([
            'id' => '2',
            'judul' => 'Arang',
            'text1' => 'Arang bisa berasal dari kayu atau batok kelapa. Media tanam ini  sangat cocok digunakan untuk tanaman anggrek di daerah dengan kelembapan tinggi. Hal itu dikarenakan arang kurang mampu mengikat air dalam jumlah banyak. Keunikan dari media jenis arang adalah sifatnya yang buffer (penyangga). Dengan demikian, jika terjadi kekeliruan dalam pemberian unsur hara yang terkandung di dalam pupuk bisa segera dinetralisir dan diadaptasikan.',
            'text2' => 'Selain itu, bahan media ini juga tidak mudah lapuk sehingga sulit ditumbuhi jamur atau cendawan miskin akan unsurhara. Oleh karenanya, ke dalam media tanam ini perlu dsuplai unsure hara beruapa aplikasi pemupukan.
            Sebelum digunakan  sebagai media tanam, idealnya arang dipecah menajdi potongan-potongan kecil terlebih dahulu sehingga memudahkan dalam penempatan didalam pot. Ukuran pecahan arang ini sangat bergantung pada wadah yang digunakan untuk menanam serta jenis tanaman yang akan ditanam.',
            'image' => 'img/media/image 32.png',
            ]);
        DB::table('media')->insert([
            'id' => '3',
            'judul' => 'Humus',
            'text1' => 'Humus adalah segala macam hasil pelapukan bahan organic oleh jasad mikro dan merupakan sumber energy jasad mikro tersebut. Bahan-bahan organic tersebut bisa berupa jaringan asli tubuh tumbuhan atau binatang mati yang belum lapuk. Biasanya, humus berwarna gelap dan dijumpai terutama pada lapisan tanah (top soil).',
            'text2' => 'Humus sangat membantu dalam proses penggemburan tanah dan memiliki kemampuan daya tukar ion yang tinggi sehingga bisa menyimpan unsure hara.oleh karenanya, dapat menunjang kesuburan tanah. Namun, media tanam ini mudah ditumbuhi jamur, terlebih ketika terjadi perubahan suhu, kelembapan, dan erasi yang ekstrim. Humus juga memiliki tingkat porousitas yang rendah sehingga akar tanaman tidka mampu menyerap air. Denagn demikian, sebaiknya penggunaan humus sebagai media tanam perlu ditambahkan media lain yang memiliki porousitas tinggi, misalnya tanah dan pasir.',
            'image' => 'img/media/image 33.png',
            ]);
        DB::table('media')->insert([
            'id' => '4',
            'judul' => 'Sekam',
            'text1' => 'Sekam padi adalah kulit biji padi (Oryza sativa) yang sudag digiling. Sekam padi yang biasa digunakan bisa beruap sekam bakar atau sekam mentah (tidak dibakar). Sekam bakar dan sekam mentah memiliki tingkat porositas yang sama. Sebagai media tanam, keduanya berperan penting dalam perbaikan struktur tanah sehingga system aerasi dan drainase di media tanam menajdi lebih baik. Penggunaan sekam bakar untuk media tanam tidka perlu disterilisasi lagi karena mikroba pathogen telah mati selama proses pembakaran. Selain itu, sekam bakar juga memiliki kandungan karbon © yang tinggi sehingga membuat media tanam ini menjadi gembur.',
            'text2' => 'Sementara kelebihan sekam mentah sebagai media tanam yaitu mudah mengikat air, tidak mudah lapuk, merupakan sumber kalium (K) yang dibutuhkan tanaman, dan tidak mudah menggumpal atau memadat sehingga akar tanaman dapat tumbuh dengan sempurna. Namun, sekam padi mentah cenderung miskin akan unsure hara.',
            'image' => 'img/media/image 34.png',
            ]);
        }
}
