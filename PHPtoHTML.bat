robocopy _site _PHPtoHTML /mir /xd _PHPtoHTML

rmdir /s /q _site\_PHPtoHTML
timeout /T 5 /nobreak
move _PHPtoHTML _site\_PHPtoHTML

cd _site\_PHPtoHTML

forfiles /s /m *.php /c "cmd /c php @file >> @fname.html"
forfiles /s /m *.php /c "cmd /c del @file"