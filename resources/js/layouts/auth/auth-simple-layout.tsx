
import { Link } from '@inertiajs/react';
import { type PropsWithChildren } from 'react';
interface AuthLayoutProps {
    name?: string;
    title?: string;
    description?: string;
}

export default function AuthSimpleLayout({ children, title }: PropsWithChildren<AuthLayoutProps>) {
    return (
        <div className="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div className="w-full max-w-lg">
                <div className="flex flex-col gap-8">
                    <div className="flex flex-col items-center gap-4">
                        <Link href={route('dashboard')} className="flex flex-col items-center gap-2 font-medium">
                            <div className="mb-1 text-3xl text-red-500  w-full text-center">
                                Welcome to GameTracker
                            </div>
                            <span className="sr-only">{title}</span>
                        </Link>
                    </div>
                    <div className=' flex flex-row grow justify-center '>
                    {children}
                    </div>
                </div>
            </div>
        </div>
    );
}
