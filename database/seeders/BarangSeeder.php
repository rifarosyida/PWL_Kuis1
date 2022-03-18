<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert(
            [
                // Fashion wanita
                [
                    'nama' => 'Gaun V-neck',
                    'diskon' => 0.5,
                    'deskripsi' => 'Gaun 3/4 dari bahan tenunan viscose. V-neck dalam di depan dan belakang dengan tali tipis yang diikat di belakang. Lengan panjang dengan karet tipis di bagian manset, jahitan kerut di bawah payudara dengan karet tipis di bagian belakang, dan rok yang melebar dengan lembut. Tanpa furing.',
                    'harga' => 479900,
                    'gambar' => 'asset/images/gaunvneckP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Tie-belt Crêpe Dress',
                    'diskon' => 0.1,
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A explicabo dolorem eum doloremque pariatur? Saepe, quasi ducimus debitis neque ullam vel inventore necessitatibus asperiores laborum. Alias, tempora. Quod iure nemo blanditiis dicta fuga nam nobis aliquam tenetur neque, fugit voluptates non, ducimus illum assumenda totam earum atque culpa maxime dolore veritatis dolores rerum. Explicabo reprehenderit doloribus distinctio deserunt alias earum quas nam ullam possimus. Consequatur natus minima nisi fugiat cupiditate excepturi delectus vitae, hic dicta repudiandae, in commodi aliquid doloribus doloremque assumenda consequuntur maiores? Sit pariatur nesciunt ipsum illo soluta accusamus eos, eum architecto? Natus tenetur nam beatae recusandae dolor!',
                    'harga' => 549900,
                    'gambar' => 'asset/images/tie-beltP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Ribbed Top',
                    'diskon' => 0,
                    'deskripsi' => 'Fitted top in ribbed jersey made from a cotton blend. Collar, buttons made from shell down the front and short raglan sleeves.',
                    'harga' => 379900,
                    'gambar' => 'asset/images/ribbed-topP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Cotton-blend Shirt',
                    'diskon' => 0.1,
                    'deskripsi' => 'Long-sleeved shirt woven in a cotton blend with a collar and buttons down the front. Yoke at the back, buttoned cuffs and a rounded hem.',
                    'harga' => 379900,
                    'gambar' => 'asset/images/cotton-blendShirtP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Gaun Chiffon Panjang',
                    'diskon' => 0.6,
                    'deskripsi' => 'Gaun panjang yang melebar lembut dari chiffon airy dengan kerah kecil berumbai, bukaan berbentuk V di bagian depan dengan tali panjang dan pas bahu yang mengerut di bagian depan dan belakang',
                    'harga' => 549900 ,
                    'gambar' => 'asset/images/gaunChifP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Tie-belt Satin Dress',
                    'diskon' => 0.5,
                    'deskripsi' => 'Calf-length dress in softly draping satin with a deep V-neck and a wrapover at the top of the front. Concealed zip in one side, 3/4-length, cuffed puff sleeves, and a seam with a wide tie belt at the waist. Unlined.',
                    'harga' => 699900,
                    'gambar' => 'asset/images/tie-beltsatinP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Atasan Berlengan Gembung',
                    'diskon' => 0,
                    'deskripsi' => 'Atasan dari kain sweatshirt katun ringan dengan garis leher bulat, lengan puff pendek, dan rib di sekeliling garis leher, manset, dan kelim.',
                    'harga' => 199900,
                    'gambar' => 'asset/images/atasanGP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Atasan Bersalur Dengan Kerah',
                    'diskon' => 0.1,
                    'deskripsi' => 'Atasan lengan pendek dari jersey bersalur dengan kerah, kancing di bagian depan, applique',
                    'harga' => 299900,
                    'gambar' => 'asset/images/atasanBersalurP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Sweatshirt',
                    'diskon' => 0,
                    'deskripsi' => 'Top in soft sweatshirt fabric made from a cotton blend with a round neckline and long raglan sleeves.',
                    'harga' => 200000,
                    'gambar' => 'asset/images/sweatshirt.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Gaun Kemeja',
                    'diskon' => 0.6,
                    'deskripsi' => 'Gaun 3/4 berbahan tenunan viscose blend dengan kerah, kancing di depan dan pas bahu dengan lipit di belakang. ',
                    'harga' => 449900,
                    'gambar' => 'asset/images/gaunKemejaP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Flounce-collared Blouse',
                    'diskon' => 0.4,
                    'deskripsi' => 'Blouse in an airy weave made from a lyocell blend with a wide, flounced collar and V-neck opening at the front with narrow ties. ',
                    'harga' => 379900,
                    'gambar' => 'asset/images/flounceP.jpg',
                    'kategori' => 'perempuan'
                ],
                [
                    'nama' => 'Blus Berhias Broderie',
                    'diskon' => 0.5,
                    'deskripsi' => 'Blus lebar dari katun longgar dengan kerah tegak kecil berhias jumbai dan pas bahu broderie anglaise bentuk V yang berumbai. ',
                    'harga' => 599900,
                    'gambar' => 'asset/images/blusP.jpg',
                    'kategori' => 'perempuan'
                ],
                // Laki-laki
                [
                    'nama' => 'Regular Fit Hoodie',
                    'diskon' => 0.5,
                    'deskripsi' => 'Long-sleeved hoodie in soft sweatshirt fabric with a kangaroo pocket, double-layered drawstring hood with a wrapover front.',
                    'harga' => 479900,
                    'gambar' => 'asset/images/regularFitL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Resor Bercorak',
                    'diskon' => 0,
                    'deskripsi' => 'Kemeja lengan pendek dari tenunan viskose bermotif dengan kerah lapel, plaket Prancis, dan kelim berpotongan lurus. ',
                    'harga' => 199900,
                    'gambar' => 'asset/images/resorBercorakL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Kemeja Regular Fit',
                    'diskon' => 0.3,
                    'deskripsi' => 'Kemeja berbahan katun tenun berpola dengan kerah rebah, plaket klasik dan pas bahu di bagian belakang.',
                    'harga' => 429900,
                    'gambar' => 'asset/images/kemejaregulerL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Kemeja Resort Bermotif',
                    'diskon' => 0,
                    'deskripsi' => 'Kemeja lengan pendek dari tenunan viscose bermotif dengan kerah resort, kancing tanpa garis plaket, dan pas bahu di belakang. ',
                    'harga' => 379900,
                    'gambar' => 'asset/images/kemejaresortL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Kemeja Resor Regular Fit',
                    'diskon' => 0.1,
                    'deskripsi' => 'Kemeja lengan pendek dari viscose bermotif dengan kerah resort, bagian depan model French, yoke di bagian belakang.',
                    'harga' => 199900,
                    'gambar' => 'asset/images/kemejaresorL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Resor Bercorak',
                    'diskon' => 0.1,
                    'deskripsi' => 'kemeja lengan pendek dari tenunan viskose bermotif dengan kerah lapel, plaket Prancis, dan kelim berpotongan lurus.',
                    'harga' => 199900,
                    'gambar' => 'asset/images/patterned.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Kemeja Katun',
                    'diskon' => 0.1,
                    'deskripsi' => 'Kemeja lengan pendek bahan tenunan katun bermotif dengan kerah turn-down, classic front, dan pas bahu di bagian belakang. ',
                    'harga' => 199900,
                    'gambar' => 'asset/images/kemejakatunL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Round-neck T-shirt Regular Fit',
                    'diskon' => 0.5,
                    'deskripsi' => 'Round-necked T-shirt in soft cotton jersey.',
                    'harga' => 99900,
                    'gambar' => 'asset/images/roundneckL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Jaket Kemeja Felt',
                    'diskon' => 0.5,
                    'deskripsi' => 'Jaket kemeja dengan bahan kain felt yang lembut dengan kerah dan kancing di bagian depan dan yoke di bagian belakang. ',
                    'harga' => 429900,
                    'gambar' => 'asset/images/jaketKemejaL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Printed T-Shirt',
                    'diskon' => 0,
                    'deskripsi' => 'T-shirt in soft cotton jersey with a round neckline and a print motif.',
                    'harga' => 169900,
                    'gambar' => 'asset/images/printedL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Jaket Softshell Regular Fit',
                    'diskon' => 0.6,
                    'deskripsi' => 'Jaket dari kain fungsional yang tahan angin dan anti air yang dirancang untuk membuat Anda tetap kering selama hujan.',
                    'harga' => 599900,
                    'gambar' => 'asset/images/jacketL.jpg',
                    'kategori' => 'lelaki'
                ],
                [
                    'nama' => 'Jacquard-weave Cotton Jacket',
                    'diskon' => 0.6,
                    'deskripsi' => 'An uncompromising collection made from more sustainable materials developed together with actor and innovator, John Boyega.',
                    'harga' => 999900,
                    'gambar' => 'asset/images/jacquardL.jpg',
                    'kategori' => 'lelaki'
                ],
            ]
            );     
    }
}
