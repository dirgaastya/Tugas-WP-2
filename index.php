<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 | Table & Form</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-montserrat">
    <!-- Navbar -->
    <nav
        class="flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white bg-opacity-80  shadow-md sm:items-baseline w-full fixed top-0 left-0">
        <div class="mb-2 sm:mb-0">
            <p class="text-4xl font-bold no-underline  text-transparent  bg-gradient-to-r from-gray-900 via-gray-600 to-gray-900 bg-clip-text">WP - 2</p>
        </div>
        <div class="mr-20">
            <a href="#table"
                class="text-lg no-underline text-grey-darkest py-1 px-4 rounded-2xl hover:bg-gray-900 hover:text-white hover:text-blue-dark transition duration-500 ease-in-out ">Table</a>
            <a href="#form"
                class="text-lg no-underline text-grey-darkest py-1 px-4 rounded-2xl hover:bg-gray-900 hover:text-white hover:text-blue-dark ml-6 transition duration-500 ease-in-out">Form</a>
        </div>
    </nav>
    <!-- Table -->
    <section id="table" class="w-1/2 mx-auto my-16 py-5">
        <h3
            class="text-center text-4xl font-bold my-4 text-gray-900">
            Faktur Penjualan</h3>

        <div class="rounded-lg shadow-xl">
            <table class="text-slate-900 overflow-hidden table-auto rounded-lg">
                <thead class="bg-slate-900 shadow-sm">
                    <tr class="text-left text-white border-b-2">
                        <th colspan="3" class="p-3">No.#123456890</th>
                        <th colspan="2" class="p-3">05 April 2022</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-sky-50">
                        <td colspan="3" rowspan="4" class="p-3">
                            <strong>Dibayarkan ke:</strong>
                            PT.Untung Terus Jalan Beruang No.8 Bandung, Jawa Barat 40011</td>
                        <td class="p-3 "><strong>Customer:</strong> Asep Sumasep Jalan Terus No.1 Bandung Jawa Barat
                            403333</td>
                    </tr>
                </tbody>
                <thead class="bg-slate-900 border-b-2">
                    <tr class="text-left text-white">
                        <th class="p-3 ">Barang / Deskripsi</th>
                        <th class="p-3 ">Qty.</th>
                        <th class="p-3 ">@</th>
                        <th colspan="2" class="p-3 ">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b-2 text-left bg-sky-50">
                        <td class="p-3 ">Buku</td>
                        <td class="p-3 ">2</td>
                        <td class="p-3 ">5,000</td>
                        <td class="text-right p-3">10,000</td>
                    </tr>
                    <tr class="border-b-2 text-left bg-slate-100">
                        <td class="p-3 ">Pulpen</td>
                        <td class="p-3 ">3</td>
                        <td class="p-3 ">1,000</td>
                        <td class="text-right p-3">3,000</td>
                    </tr>
                    <tr class="border-b-2 bg-sky-50">
                        <td colspan="3" class="p-3 "><strong>Subtotal</strong></td>
                        <td class="text-right p-3 ">13,000</td>
                    </tr>
                    <tr class="border-b-2 bg-slate-100">
                        <td colspan="2" class="p-3 "><strong>PPN</strong></td>
                        <td class="text-left  p-3 ">11%</td>
                        <td class="text-right p-3 ">1,430</td>
                    </tr>
                    <tr class="bg-sky-50">
                        <td colspan="3" class="p-3 "><strong>Total</strong></td>
                        <td class="text-right p-3">14,430</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
    <!-- Form -->
    <section id="form" class="w-3/4 mx-auto my-2 min-h-1/2 bg-gray-900  border border-gray-900 rounded-2xl">

        <div
            class=" sm:mx-24 md:mx-34 lg:mx-56 mx-auto  flex items-center space-y-4 py-10 font-semibold text-gray-500 flex-col">

            <h1 class="text-white text-4xl">Form Buku Tamu</h1>
            <form method="POST" id="form-wa">
                <input
                    class="w-full p-2 bg-gray-900 rounded-md border border-gray-700 focus:outline-none focus:border-green-700 mb-3 "
                    placeholder="Name" type="text" name="name" id="name">
                <input
                    class="w-full p-2 bg-gray-900 rounded-md border border-gray-700  focus:outline-none focus:border-green-700 mb-3  invalid:border-red-500 invalid:focus:border-red-500 "
                    placeholder="No.Hp" type="tel" name="telp" id="telp" pattern="[0-9]+">
                <textarea
                    class="w-full p-2 bg-gray-900 rounded-md border border-gray-700 focus:outline-none focus:border-green-700 mb-3 "
                    placeholder="Masukan Pesan" name="pesan" id="message" rows="3"></textarea>
                <input
                    class="w-full p-2 bg-gray-50 rounded-full font-bold text-gray-900 border border-gray-700 mb-3 hover:bg-green-500 hover:text-white cursor-pointer transition ease-in-out duration-500"
                    type="submit" id="submit">

            </form>
        </div>
    </section>
    <script>
        let submit = document.getElementById('submit');


        submit.addEventListener('click', () => {
            let name = document.querySelector('#name').value;
            let telp = document.getElementById('telp').value;
            let message = document.getElementById('message').value;
            let text = message + '%0a%0a-' + name;
            let win = window.open('https://api.whatsapp.com/send?phone=' + telp + '&text=' + text);
            if (win) {
                win.focus();
            } else {
                alert('Please allow popups for this website');
            }
        });
    </script>
</body>

</html>