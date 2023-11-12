<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sliding Text Animation</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'text-slide-2': 'text-slide-2 5s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-3': 'text-slide-3 7.5s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-4': 'text-slide-4 10s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-5': 'text-slide-5 12.5s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-6': 'text-slide-6 15s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-7': 'text-slide-7 17.5s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                        'text-slide-8': 'text-slide-8 20s cubic-bezier(0.83, 0, 0.17, 1) infinite',
                    },
                    keyframes: {
                        'text-slide-2': {
                            '0%, 40%': {
                                transform: 'translateY(0%)',
                            },
                            '50%, 90%': {
                                transform: 'translateY(-33.33%)',
                            },
                            '100%': {
                                transform: 'translateY(-66.66%)',
                            },
                        },
                        'text-slide-3': {
                            '0%, 26.66%': {
                                transform: 'translateY(0%)',
                            },
                            '33.33%, 60%': {
                                transform: 'translateY(-25%)',
                            },
                            '66.66%, 93.33%': {
                                transform: 'translateY(-50%)',
                            },
                            '100%': {
                                transform: 'translateY(-75%)',
                            },
                        },
                        'text-slide-4': {
                            '0%, 20%': {
                                transform: 'translateY(0%)',
                            },
                            '25%, 45%': {
                                transform: 'translateY(-20%)',
                            },
                            '50%, 70%': {
                                transform: 'translateY(-40%)',
                            },
                            '75%, 95%': {
                                transform: 'translateY(-60%)',
                            },                            
                            '100%': {
                                transform: 'translateY(-80%)',
                            },
                        },
                        'text-slide-5': {
                            '0%, 16%': {
                                transform: 'translateY(0%)',
                            },
                            '20%, 36%': {
                                transform: 'translateY(-16.66%)',
                            },
                            '40%, 56%': {
                                transform: 'translateY(-33.33%)',
                            },
                            '60%, 76%': {
                                transform: 'translateY(-50%)',
                            },
                            '80%, 96%': {
                                transform: 'translateY(-66.66%)',
                            },
                            '100%': {
                                transform: 'translateY(-83.33%)',
                            },
                        },
                        'text-slide-6': {
                            '0%, 13.33%': {
                                transform: 'translateY(0%)',
                            },
                            '16.66%, 30%': {
                                transform: 'translateY(-14.28%)',
                            },
                            '33.33%, 46.66%': {
                                transform: 'translateY(-28.57%)',
                            },
                            '50%, 63.33%': {
                                transform: 'translateY(-42.85%)',
                            },
                            '66.66%, 80%': {
                                transform: 'translateY(-57.14%)',
                            },
                            '83.33%, 96.66%': {
                                transform: 'translateY(-71.42%)',
                            },
                            '100%': {
                                transform: 'translateY(-85.71%)',
                            },
                        },
                        'text-slide-7': {
                            '0%, 11.43%': {
                                transform: 'translateY(0%)',
                            },
                            '14.28%, 25.71%': {
                                transform: 'translateY(-12.5%)',
                            },
                            '28.57%, 40%': {
                                transform: 'translateY(-25%)',
                            },
                            '42.85%, 54.28%': {
                                transform: 'translateY(-37.5%)',
                            },
                            '57.14%, 68.57%': {
                                transform: 'translateY(-50%)',
                            },
                            '71.42%, 82.85%': {
                                transform: 'translateY(-62.5%)',
                            },
                            '85.71%, 97.14%': {
                                transform: 'translateY(-75%)',
                            },
                            '100%': {
                                transform: 'translateY(-87.5%)',
                            },
                        },
                        'text-slide-8': {
                            '0%, 10%': {
                                transform: 'translateY(0%)',
                            },
                            '12.5%, 22.5%': {
                                transform: 'translateY(-11.11%)',
                            },
                            '25%, 35%': {
                                transform: 'translateY(-22.22%)',
                            },
                            '37.5%, 47.5%': {
                                transform: 'translateY(-33.33%)',
                            },
                            '50%, 60%': {
                                transform: 'translateY(-44.44%)',
                            },
                            '62.5%, 72.5%': {
                                transform: 'translateY(-55.55%)',
                            },
                            '75%, 85%': {
                                transform: 'translateY(-66.66%)',
                            },
                            '87.5%, 97.5%': {
                                transform: 'translateY(-77.77%)',
                            },
                            '100%': {
                                transform: 'translateY(-88.88%)',
                            },
                        }
                    },
                },
            },
        };
    </script>
</head>

<body class="relative font-inter antialiased">

    <main class="relative min-h-screen flex flex-col justify-center bg-slate-900 overflow-hidden">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
            <div class="text-center">

                <!-- Sliding Text animation -->
                <div class="font-extrabold text-3xl md:text-4xl [text-wrap:balance] bg-clip-text text-transparent bg-gradient-to-r from-slate-200/60 to-50% to-slate-200">Funtastic still in the works <span class="text-indigo-500 inline-flex flex-col h-[calc(theme(fontSize.3xl)*theme(lineHeight.tight))] md:h-[calc(theme(fontSize.4xl)*theme(lineHeight.tight))] overflow-hidden">
                    <ul class="block animate-text-slide-5 text-left leading-tight [&_li]:block">
                        <li>PHP</li>
                        <li>MVC</li>
                        <li>Small</li>
                        <li>Simply</li>
                        <li>For Learn</li>
                    </ul>
                </span></div>
               
                
            </div>

        </div>
    </main>

</body>

</html>