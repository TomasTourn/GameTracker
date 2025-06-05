import { Head } from '@inertiajs/react';
import { useTranslation } from 'react-i18next';
import AppLayout from '@/layouts/app-layout';
import SettingsLayout from '@/layouts/settings/layout';
import HeadingSmall from '@/components/heading-small';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Language settings',
        href: '/settings/language',
    },
];

export default function Language() {
    const { t, i18n } = useTranslation();
    const currentLang = i18n.language;

const handleChange = async (e: React.ChangeEvent<HTMLSelectElement>) => {
    const newLang = e.target.value;

    localStorage.setItem('i18nextLng', newLang); // 👈 Esto es clave

    await i18n.changeLanguage(newLang);
    location.reload(); // Solo si tenés textos server-side
};

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title={t('Language settings')} />

            <SettingsLayout>
                <div className="space-y-6">
                    <HeadingSmall
                        title={t('Language settings')}
                        description={t("Select your preferred language for the interface.")}
                    />
                    <div>
                        <label htmlFor="language" className="block font-medium mb-1">
                            {t('Choose your language')}
                        </label>
                        <select
                            id="language"
                            value={currentLang}
                            onChange={handleChange}
                            className="border p-2 rounded"
                        >
                            <option value="en">English</option>
                            <option value="es">Español</option>
                        </select>
                    </div>
                </div>
            </SettingsLayout>
        </AppLayout>
    );
}
