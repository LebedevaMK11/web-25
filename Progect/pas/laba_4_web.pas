PROGRAM SarahRevere (INPUT, OUTPUT);
USES
 SysUtils;
BEGIN {SarahRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF GetEnvironmentVariable('QUERY_STRING') = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF GetEnvironmentVariable('QUERY_STRING') = 'lanterns=2'
    THEN
      WRITELN('The British coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')

END. {Sarah revere}
