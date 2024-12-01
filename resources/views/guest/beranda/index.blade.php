<x-layout.guest>
  <div class="relative h-screen w-full">
    <img class="absolute inset-0 object-cover w-full h-full brightness-50" src="{{ asset('guest-background.jpg') }}" alt="">

    <div class="absolute flex-col inset-0 flex items-center justify-center gap-4 z-10 text-center">
      <p class="text-white text-4xl font-bold">Selamat Datang di Website Resmi</p>
      <p class="text-white text-xl font-semibold">Desa Jelutung | Kecamatan Pemangkat</p>
    </div>
  </div>
  
  <main class="w-full flex flex-col items-center gap-4 mt-4">
    <div class="w-full p-4 md:w-4/5 shadow-xl rounded-lg text-center">
      <h1 class="text-3xl font-semibold p-4">Sorotan</h1>
      <x-highlight :items="$articles"/>
    </div>

    {{-- Sedikit Tentang Desa Jelutung --}}
    <div class="w-full p-4 md:w-4/5 shadow-xl rounded-lg bg-white">
      <h1 class="text-3xl font-semibold p-4 text-center">Sedikit Tentang Desa Jelutung</h1>
      <div class="bootstrap-styled">
        {!! $greetings->content ?? "" !!}
      </div>
    </div>

    <div class="w-full p-4 md:w-4/5 shadow-xl rounded-lg bg-white">
      <h1 class="text-3xl font-semibold p-4 text-center">Video Profil</h1>
      <div class="bootstrap-styled">
        {!! $profile_video->content ?? "" !!}
      </div>
    </div>

    {{-- Sejarah --}}
    <div class="w-full p-4 md:w-4/5 shadow-xl rounded-lg bg-white">
      <h1 class="text-3xl font-semibold w-full text-center p-4">Sejarah</h1>
      
      <div class="bootstrap-styled">
        {!! $history->content ?? "" !!}
      </div>
      
    </div>

    {{-- Statistik --}}
    <div class="w-full p-4 md:w-4/5 shadow-xl rounded-lg bg-white">
      <h1 class="text-3xl font-semibold w-full text-center p-4">Statistik</h1>
      <x-statistics />
    </div>

    {{-- Statistik Lama --}}
    {{-- <div class="w-full pb-4 bg-gradient-to-l from-green-700 to-green-600 text-white mt-4 rounded-xl">
      <h1 class="text-3xl font-semibold w-full text-center p-4">Statistik</h1>
      <main class="grid place-items-center place-content-center w-full justify-items-center gap-4 grid-cols-[repeat(auto-fit,_minmax(400px,_1fr))] p-4">
        <div class="">
          <canvas id="gender-chart-village" class="bg-white p-4 w-full h-full rounded-xl"></canvas>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const ctx = document.getElementById('gender-chart-village').getContext('2d');

              const data = {
                labels: [
                    'Pemangkat Kota', 'Harapan', 'Penjajap', 
                    'Jelutung', 'Perapakan', 'Sebatuan', 
                    'Gugah Sejahtera', 'Lonam'
                ],
                datasets: [
                    {
                        label: 'Laki-Laki',
                        data: [5371, 2892, 6511, 2541, 2615, 1905, 1845, 3160],
                        backgroundColor: 'rgba(54, 162, 235, 0.6)', // Biru
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Perempuan',
                        data: [5142, 2719, 6224, 2438, 2484, 1767, 1860, 3095],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)', // Merah
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Jumlah Penduduk Desa Berdasarkan Jenis Kelamin',
                            font: {
                              size: 18, // Ukuran font dalam piksel
                              weight: 'bold' // Ketebalan font (bisa 'normal', 'bold', dll)
                          }
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Nama Desa'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Jumlah Penduduk'
                            },
                            beginAtZero: true
                        }
                    }
                }
              };

              new Chart(ctx, config);
            });
          </script>
        </div>
        <div class="">
          <canvas id="gender-chart-growth" class="bg-white p-4 max-w-md rounded-xl w-full h-full"></canvas>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const ctx = document.getElementById('gender-chart-growth').getContext('2d');

              const data = {
                labels: [
                  '2019', '2020', '2021', '2022', '2023'
                ],
                datasets: [
                    {
                        label: 'Laki-Laki',
                        data: [23422, 27039,	27141, 27141, 26840],
                        backgroundColor: 'rgba(54, 162, 235, 0.6)', // Biru
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Perempuan',
                        data: [23749, 26209, 26453, 27141, 25729],
                        backgroundColor: 'rgba(255, 99, 132, 0.6)', // Merah
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Laju Pertumbuhan Penduduk',
                            font: {
                              size: 18, // Ukuran font dalam piksel
                              weight: 'bold' // Ketebalan font (bisa 'normal', 'bold', dll)
                          }
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Nama Desa'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Jumlah Penduduk'
                            },
                            beginAtZero: true
                        }
                    }
                }
              };

              new Chart(ctx, config);
            });
          </script>
        </div>
        <div>
          <canvas id="religion-chart" class="bg-white p-4 max-w-md rounded-xl w-full h-full"></canvas>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ctx = document.getElementById('religion-chart').getContext('2d');
                
                const data = {
                    labels: ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Khonghucu', 'Aliran Kepercayaan'],
                    datasets: [{
                        data: [39664, 703, 869, 6, 9444, 1883, 0],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',   // Merah
                            'rgba(54, 162, 235, 0.8)',   // Biru
                            'rgba(255, 206, 86, 0.8)',   // Kuning
                            'rgba(75, 192, 192, 0.8)',   // Hijau
                            'rgba(153, 102, 255, 0.8)',  // Ungu
                            'rgba(255, 159, 64, 0.8)',   // Oranye
                            'rgba(199, 199, 199, 0.8)'   // Abu-abu
                        ]
                    }]
                };
    
                const config = {
                    type: 'pie',
                    data: data,
                    options: {
                        responsive: true,
                        plugins: {
                            title: {
                                display: true,
                                text: 'Komposisi Penduduk Berdasarkan Agama',
                                font: {
                                    size: 24,
                                    weight: 'bold'
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let total = context.dataset.data.reduce((a, b) => a + b, 0);
                                        let value = context.parsed;
                                        let percentage = ((value / total) * 100).toFixed(2);
                                        return `${context.label}: ${value} (${percentage}%)`;
                                    }
                                }
                            }
                        }
                    }
                };
    
                new Chart(ctx, config);
            });
          </script>
        </div>
        <div>
          <canvas id="employment-chart" class="bg-white p-4 max-w-md rounded-xl w-full h-full"></canvas>
          <script>
              document.addEventListener('DOMContentLoaded', function() {
                  const ctx = document.getElementById('employment-chart').getContext('2d');
                  
                  const data = {
                      labels: [
                          'Belum/Tidak Bekerja', 
                          'Aparatur/Pejabat Negara', 
                          'Tenaga Pengajar', 
                          'Wiraswasta', 
                          'Pertanian/Peternakan',
                          'Nelayan',
                          'Agama dan Kepercayaan',
                          'Pelajar/Mahasiswa',
                          'Tenaga Kesehatan',
                          'Pensiunan',
                          'Lainnya',
                      ],
                      datasets: [{
                          data: [9772, 1003, 50, 13848, 3191, 1342, 22, 11973, 26, 329, 11013],
                          backgroundColor: [
                              'rgba(255, 99, 132, 0.8)',   // Merah
                              'rgba(54, 162, 235, 0.8)',   // Biru
                              'rgba(255, 206, 86, 0.8)',   // Kuning
                              'rgba(75, 192, 192, 0.8)',   // Hijau
                              'rgba(153, 102, 255, 0.8)'   // Ungu
                          ]
                      }]
                  };
      
                  const config = {
                      type: 'pie',
                      data: data,
                      options: {
                          responsive: true,
                          plugins: {
                              title: {
                                  display: true,
                                  text: 'Komposisi Penduduk Berdasarkan Pekerjaan',
                                  font: {
                                      size: 24,
                                      weight: 'bold'
                                  }
                              },
                              tooltip: {
                                  callbacks: {
                                      label: function(context) {
                                          let total = context.dataset.data.reduce((a, b) => a + b, 0);
                                          let value = context.parsed;
                                          let percentage = ((value / total) * 100).toFixed(2);
                                          return `${context.label}: ${value} (${percentage}%)`;
                                      }
                                  }
                              }
                          }
                      }
                  };
      
                  new Chart(ctx, config);
              });
          </script>
        </div>    
      </main>
    </div> --}}

    {{-- Kumpulan Artikel --}}
    <div class="w-full pb-4 text-slate-700 mt-4 rounded-xl border-2">
      <h1 class="text-3xl font-semibold w-full text-center p-4">Kumpulan Berita</h1>
      <div>
        <x-article-slider 
          type="newest"
          slider-title="Berita Terkini"
          slider-description="Dapatkan Update Terbaru dari Sumber Terpercaya"
          slider-url="{{ route('artikel.index.guest') }}"
        />
        <hr class="h-1 my-8 bg-gray-200 border-0 dark:bg-gray-700 w-full">
        <x-article-slider 
          type="important"
          slider-title="Informasi Penting"
          slider-description="Pengumuman dan Informasi Penting yang Harus Anda Ketahui"
          slider-url="{{ route('artikel.index.guest') }}"
        />
        <hr class="h-1 my-8 bg-gray-200 border-0 dark:bg-gray-700 w-full">
        <x-article-slider 
          type="popular"
          slider-title="Paling Sering Dilihat"
          slider-description="Berita Populer yang Sedang Hangat Dibicarakan"
          slider-url="{{ route('artikel.index.guest') }}"
        />
      </div>
    </div>
  </main>
</x-layout.guest>