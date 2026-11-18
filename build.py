"""Build a WordPress-installable ZIP without development or private files."""
from pathlib import Path
from zipfile import ZipFile, ZIP_DEFLATED
import re
root = Path(__file__).parent
theme = root / 'codemonkeyarts'
version = re.search(r'^Version: (.+)$', (theme / 'style.css').read_text(), re.M)[1]
out = root / 'dist'
out.mkdir(exist_ok=True)
archive = out / f'codemonkeyarts-{version}.zip'
with ZipFile(archive, 'w', ZIP_DEFLATED) as z:
    for path in sorted(theme.rglob('*')):
        if path.is_file():
            z.write(path, path.relative_to(root))
print(archive)
