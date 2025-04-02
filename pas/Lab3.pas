PROGRAM PrintHello(INPUT, OUTPUT);
USES
  SysUtils;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('REQUEST_METHOD: ', GetEnvironmentVariable('REQUEST_METHOD'));
  WRITELN('QUERY_STRING: ', GetEnvironmentVariable('QUERY_STRING'));
  WRITELN('CONTENT_LENGTH: ', GetEnvironmentVariable('CONTENT_LENGTH'));
  WRITELN('HTTP_USER_AGENT: ', GetEnvironmentVariable('HTTP_USER_AGENT'));
  WRITELN('HTTP_HOST: ', GetEnvironmentVariable('HTTP_HOST'));
  QueryString := GetEnvironmentVariable('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  IF PosName <> 0
  THEN
    BEGIN
      Name := Copy(QueryString, 6, LENGTH(QueryString) - 5);
      WRITELN('Hello dear, ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!');
  IF GetEnvironmentVariable('QUERY_STRING') = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF GetEnvironmentVariable('QUERY_STRING') = 'lanterns=2'
    THEN
      WRITELN('The British coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END.

