PROGRAM Greeting(INPUT, OUTPUT);
USES
  SysUtils;
VAR
  QueryString, Name: STRING;
  PosName: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnvironmentVariable('QUERY_STRING');
  PosName := Pos('name=', QueryString);
  IF PosName <>
  THEN
    BEGIN
      Name := Copy(QueryString, 6, LENGTH(QueryString) - 5);
      WRITELN('Hello dear, ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.
  
