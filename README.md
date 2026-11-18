# CodeMonkeyArts — Signal Lab

A dedicated classic WordPress theme for [codemonkeyarts.com](https://codemonkeyarts.com/). CodeMonkeyArts is always one word.

Signal Lab shares the Forum / Cormorant Garamond typography, dark theatrical atmosphere, and antique-gold signature of Coda Languez's author site. Its own identity pairs antique-gold headings and actions with cyan circuitry, magenta chromatic offsets, and a terminal illustration. The focus is creative engineering: apps, workflows, and experiments that turn ideas into working creative tools.

## Download

[Download Signal Lab 1.0.2](https://github.com/codalanguez/codemonkeyarts-theme/releases/download/v1.0.2/codemonkeyarts-1.0.2.zip) as an installable WordPress theme ZIP. Visit the [theme page](https://codemonkeyarts.com/signal-lab/) for a preview, features, and installation instructions. Source and releases are public.

## Build and install

Requires WordPress 6.0+ and PHP 7.4+. Run `python build.py` to create `dist/codemonkeyarts-1.0.2.zip`. Upload that ZIP under Appearance → Themes → Add Theme → Upload Theme, preview, then activate **CodeMonkeyArts Signal Lab**.

Set Settings → Reading to a static homepage containing the Lab project content. The theme supplies the new front-page hero; `assets/signal.css` suppresses the legacy `.cl-lab-hero` only on the homepage. Existing Lab, MechApe and Haunted Tech content remains editable in WordPress. This theme does not import page content or change publication status. MechApe Image Studio remains a draft on the production site.

## Source map

- `codemonkeyarts/front-page.php`: new Signal Lab homepage hero and existing WordPress page content.
- `codemonkeyarts/header.php`: one-word identity, navigation and motion control.
- `codemonkeyarts/functions.php`: theme setup, asset enqueueing, tech social links and fallback navigation.
- `codemonkeyarts/assets/signal.css`: brand tokens, responsive cyber styling and existing-page compatibility.
- `codemonkeyarts/assets/signal.js`: optional local motion preference; no tracking or external requests.
- `codemonkeyarts/assets/fonts/`: self-hosted typography and icon font.
- `build.py`: builds the upload ZIP using Python's standard library.

## Design and accessibility

Ink `#080d10`, cyan `#70f5de`, magenta `#f879b8`, ivory `#f5ebd9`, antique gold `#d6b76b`. Body copy stays literary; controls and system labels use monospace. The terminal illustration is CSS, decorative, and hidden from assistive technology. Readable text never scrambles. Intro animation runs once; wordmark glitch runs on hover. Cursor animations stop after three cycles. The Effects toggle persists locally and the operating-system reduced-motion preference always takes priority. Keyboard focus and a skip link are included.

GitHub, the technology Payhip store, Civitai, Substack and Threads appear on this site. Substack and Threads intentionally share the existing author profiles. Book commerce belongs on codalanguez.com. Rank Math owns SEO metadata; 10Web owns caching. No analytics or third-party runtime font requests are added.

## Rollback

The original **CodeMonkey Lab** theme is retained on the server. Activate it under Appearance → Themes to restore the previous presentation. Page content is unchanged by theme activation.

## License

Theme code: GPL-2.0-or-later. Bundled fonts retain their own licenses; see `THIRD-PARTY.md` and the font license files. Brand names, product artwork, and WordPress page content are not granted a separate trademark or content license by this repository.

## Mascot and showcase

The pixel monkey is used as the site header mark and Signal Lab theme mascot. Its source reference was supplied by the site owner; the tech-styled transparent derivative is in `codemonkeyarts/assets/codemonkeyarts-pixel-mascot.png`. The theme is featured at `/signal-lab/` and in the homepage project list. See `content/` for the editable page copy and preview asset.
