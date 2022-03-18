<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert(
            [
                [
                    'nama' => 'Leonardo Johan',
                    'tanggal_lahir' => '2005/09/25',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Jepang',
                    'noHp' => '0811 2653 5512',
                    'email' => 'leonardojohan@gmail.com'
                ],
                [
                    'nama' => 'Tiger Nixon',
                    'tanggal_lahir' => '2011/04/25',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0811 2233 5512',
                    'email' => 'tigernixon@gmail.com'
                ],
                [
                    'nama' => 'Garrett Winters',
                    'tanggal_lahir' => '2011/07/25',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Tokyo',
                    'noHp' => '0811 3355 5512',
                    'email' => 'garrettwinters@gmail.com'
                ],
                [
                    'nama' => 'Ashton Cox',
                    'tanggal_lahir' => '2009/01/12',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0844 3355 5512',
                    'email' => 'ashtoncox@gmail.com'
                ],
                [
                    'nama' => 'Cedric Kelly',
                    'tanggal_lahir' => '2012/03/29',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0844 3305 5512',
                    'email' => 'cedrickell@gmail.com'
                ],
                [
                    'nama' => 'Airi Satou',
                    'tanggal_lahir' => '2008/11/28',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Tokyo',
                    'noHp' => '0844 0355 5512',
                    'email' => 'airisatou@gmail.com'
                ],
                [
                    'nama' => 'Brielle Williamson',
                    'tanggal_lahir' =>'2012/12/02' ,
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'New York',
                    'noHp' => '0844 0355 1112',
                    'email' => 'brielleWilliamson@gmail.com'
                ],
                [
                    'nama' => 'Herrod Chandler',
                    'tanggal_lahir' => '2012/08/06',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0823 0355 1112',
                    'email' => 'herrodchandler@gmail.com'
                ],
                [
                    'nama' => 'Rhona Davidson',
                    'tanggal_lahir' => '2010/10/14',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Tokyo',
                    'noHp' => '0823 0355 1119',
                    'email' => 'rhonaDavidson@gmail.com'
                ],
                [
                    'nama' => 'Colleen Hurst',
                    'tanggal_lahir' => '2009/09/15',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0823 0355 1118',
                    'email' => 'colleenHurst@gmail.com'
                ],
                [
                    'nama' => 'Sonya Frost',
                    'tanggal_lahir' => '2008/12/13',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0823 0355 8112',
                    'email' => 'sonyaFrost@gmail.com'
                ],
                [
                    'nama' => 'Jena Gaines',
                    'tanggal_lahir' => '2008/12/19',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'London',
                    'noHp' => '0823 0355 1092',
                    'email' => 'jenaGaines@gmail.com'
                ],
                [
                    'nama' => 'Quinn Flynn',
                    'tanggal_lahir' => '2013/03/03',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0829 0355 1112',
                    'email' => 'quinnFlynn@gmail.com'
                ],
                [
                    'nama' => 'Charde Marshall',
                    'tanggal_lahir' => '2008/10/16',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0823 0355 1112',
                    'email' => 'chardeMarshall@gmail.com'
                ],
                [
                    'nama' => 'Haley Kennedy',
                    'tanggal_lahir' => '2012/12/18',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'London',
                    'noHp' => '0823 0305 1112',
                    'email' => 'haleykennedy@gmail.com'
                ],
                [
                    'nama' => 'Tatyana Fitzpatrick',
                    'tanggal_lahir' => '2010/03/17',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'London',
                    'noHp' => '0883 0355 1112',
                    'email' => 'tatyanafitzpatrick@gmail.com'
                ],
                [
                    'nama' => 'Michael Silva',
                    'tanggal_lahir' => '2012/11/27',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'London',
                    'noHp' => '0829 0355 1112',
                    'email' => 'michaelsilva@gmail.com'
                ],
                [
                    'nama' => 'Gloria Little',
                    'tanggal_lahir' => '2009/04/10',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'New York',
                    'noHp' => '0823 0995 1112',
                    'email' => 'glorialittle@gmail.com'
                ],
                [
                    'nama' => 'Paul Byrd',
                    'tanggal_lahir' => '2010/06/09',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'New York',
                    'noHp' => '0826 0355 1112',
                    'email' => 'paulByrd@gmail.com'
                ],
                [
                    'nama' => 'Bradley Greer',
                    'tanggal_lahir' => '2012/10/13',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'London',
                    'noHp' => '0823 0335 1112',
                    'email' => 'bradleygreer@gmail.com'
                ],
                [
                    'nama' => 'Dai Rios',
                    'tanggal_lahir' => '2012/09/26',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0853 0355 1112',
                    'email' => 'daiRios@gmail.com'
                ],
                [
                    'nama' => 'Jenette Caldwell',
                    'tanggal_lahir' => '2011/09/03',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'New York',
                    'noHp' => '0821 0355 1112',
                    'email' => 'jenetteCaldwell@gmail.com'
                ],
                [
                    'nama' => 'Yuri Berry',
                    'tanggal_lahir' => '2009/06/25',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'New York',
                    'noHp' => '0823 0359 1112',
                    'email' => 'yuriBerry@gmail.com'
                ],
                [
                    'nama' => 'Caesya Vance',
                    'tanggal_lahir' => '2011/12/12',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'New York',
                    'noHp' => '0823 0377 1112',
                    'email' => 'caesyavance@gmail.com'
                ],
                [
                    'nama' => 'Doris Wilder',
                    'tanggal_lahir' => '2010/09/20',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Sidney',
                    'noHp' => '0823 0987 1112',
                    'email' => 'doriswilder@gmail.com'
                ],
                [
                    'nama' => 'Angelica Ramos',
                    'tanggal_lahir' => '2009/10/09',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'London',
                    'noHp' => '0893 0987 1112',
                    'email' => 'angelicaramos@gmail.com'
                ],
                [
                    'nama' => 'Jennifer Chang',
                    'tanggal_lahir' => '2010/11/14',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Singapore',
                    'noHp' => '0893 0087 1112',
                    'email' => 'jenniferchang@gmail.com'
                ],
                [
                    'nama' => 'Gavin Joyce',
                    'tanggal_lahir' => '2010/12/22',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0893 0907 1112',
                    'email' => 'gavinjoyce@gmail.com'
                ],
                [
                    'nama' => 'Brenden Wagner',
                    'tanggal_lahir' => '2011/06/07',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0893 0767 1112',
                    'email' => 'brendenwagner@gmail.com'
                ],
                [
                    'nama' => 'Fiona Green',
                    'tanggal_lahir' => '2010/03/11',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'San Francisco',
                    'noHp' => '0893 0987 9912',
                    'email' => 'fionagreen@gmail.com'
                ],
                [
                    'nama' => 'Shou Itou',
                    'tanggal_lahir' => '2009/03/11',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Tokyo',
                    'noHp' => '0093 0987 1112',
                    'email' => 'shouitou@gmail.com'
                ],
                [
                    'nama' => 'Michelle House',
                    'tanggal_lahir' => '2011/06/02',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Sidney',
                    'noHp' => '0893 0987 1112',
                    'email' => 'michellehouse@gmail.com'
                ],
                [
                    'nama' => 'Michael',
                    'tanggal_lahir' => '2008/01/01',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'Jepang',
                    'noHp' => '0893 0906 1112',
                    'email' => 'michael@gmail.com'
                ],
                [
                    'nama' => 'Suki Burks',
                    'tanggal_lahir' => '2009/10/22',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'London',
                    'noHp' => '0893 7787 1112',
                    'email' => 'sukiburks@gmail.com'
                ],
                [
                    'nama' => 'Martena Mccray',
                    'tanggal_lahir' => '2011/03/09',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Edinburgh',
                    'noHp' => '0873 0987 1112',
                    'email' => 'martenamccray@gmail.com'
                ],
                [
                    'nama' => 'Gavin Cortez',
                    'tanggal_lahir' => '2008/10/26',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'San Francisco',
                    'noHp' => '0893 1987 1112',
                    'email' => 'gavincortez@gmail.com'
                ],
                [
                    'nama' => 'Prescott Bartlett',
                    'tanggal_lahir' => '2011/05/07',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'London',
                    'noHp' => '0898 0487 1112',
                    'email' => 'prescottBartlett@gmail.com'
                ],
                [
                    'nama' => 'Rose Mark',
                    'tanggal_lahir' => '2008/02/02',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'Tokyo',
                    'noHp' => '0893 8787 1112',
                    'email' => 'rosemark@gmail.com'
                ],
                [
                    'nama' => 'Vivian Harrell',
                    'tanggal_lahir' => '2009/02/14',
                    'jenis_kelamin' => 'Perempuan',
                    'alamat' => 'San Francisco',
                    'noHp' => '0811 0987 1112',
                    'email' => 'vivianharrell@gmail.com'
                ],
                [
                    'nama' => 'Howard Hatfield',
                    'tanggal_lahir' => '2008/12/16',
                    'jenis_kelamin' => 'Laki-laki',
                    'alamat' => 'London',
                    'noHp' => '0889 0987 1112',
                    'email' => 'howardhatfield@gmail.com'
                ],
            ]
            );
    }
}
