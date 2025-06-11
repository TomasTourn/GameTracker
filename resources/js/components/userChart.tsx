import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    BarElement,
    Title,
    Tooltip,
    Legend,
    TooltipItem,
} from 'chart.js';
import { Bar } from 'react-chartjs-2';
import {RatingsDistribution} from '@/types/stats';

ChartJS.register(
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend,
);

interface UserChartProps {
    ratings: RatingsDistribution;
}

export default function UserChart({ratings}:UserChartProps) {
    console.log(ratings);
     const ratingValues = Array.from(ratings).slice(5);

    const options = {
        responsive: false,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: false,
                },
                ticks: {
                    display: false,
                },
                grid: {
                    display: false,
                },
                border: {
                    display: false,
                }
            },
            x: {
                grid: {
                    display: false,
                },
                border: {
                    display: false,
                },
                ticks: {
                    color: 'oklch(80.47% 0.000 0)',
                    font: {
                        size: 12
                    },
                    maxRotation: 0,
                    minRotation: 0,
                    autoSkip: false,
                }
            }
        },
        plugins: {
        tooltip: {
        callbacks: {
            label: function(context: TooltipItem<'bar'>) {
                // Sumamos 1 porque el array empieza en 0 pero nuestros ratings van de 1 a 10
                const rating = context.dataIndex + 5;
                return `Cantidad: ${context.parsed.y} | Puntaje: ${rating}★`;
            }
        }
        },
            legend: {
                display: false,
            },
            title: {
                display: true,
                align: "start" as const,
                text: 'Your Game Ratings',
                color: 'oklch(80.47% 0.000 0)',
            },
        }
    };


    const data = {
        labels: ['5★', '', '', '', '', '10★'],
        datasets: [
            {
                
                // Ejemplo: cantidad de juegos para cada puntuación
                data: ratingValues,
                backgroundColor: 'rgba(239, 68, 68, 0.5)',
                borderColor: 'rgb(239, 68, 68)',
                borderWidth: 1,
                
            },
            
        ],
    };

    return (
        <div className="h-full w-full">
            <Bar options={options} data={data} />
        </div>
    );
}