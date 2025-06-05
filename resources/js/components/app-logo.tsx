import AppLogoIcon from './app-logo-icon';

export default function AppLogo() {
    return (
        <>

                <AppLogoIcon/>

            <div className="ml-1 grid flex-1 text-left text-sm">
                <span className="truncate leading-none font-semibold text-2xl">Game Tracker</span>
            </div>
        </>
    );
}
