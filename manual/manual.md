<!-- title: PDF24 Creator 11 Manual -->
# PDF24 Creator 11 Manual

*Contents*

- [PDF24 Creator 11 Manual](#pdf24-creator-11-manual)
  - [1 Preamble](#1-preamble)
  - [2 EXE installer](#2-exe-installer)
    - [2.1 Examples of use](#21-examples-of-use)
  - [3 MSI installer](#3-msi-installer)
    - [3.1 Examples of use:](#31-examples-of-use)
  - [4 Registry Settings](#4-registry-settings)
    - [4.1 Common registry settings](#41-common-registry-settings)
    - [4.2 Registry settings related to Webview2](#42-registry-settings-related-to-webview2)
    - [4.3 Registry settings related to PDF24 Assistant](#43-registry-settings-related-to-pdf24-assistant)
    - [4.4 Registry settings related to PDF24 Compress](#44-registry-settings-related-to-pdf24-compress)
    - [4.5 Registry settings related to PDF24 Creator](#45-registry-settings-related-to-pdf24-creator)
    - [4.6 Registry settings related to PDF24 Output Profile Manager](#46-registry-settings-related-to-pdf24-output-profile-manager)
    - [4.7 Registry settings related to PDF24 OCR](#47-registry-settings-related-to-pdf24-ocr)
    - [4.8 Registry settings related to PDF24 Toolbox](#48-registry-settings-related-to-pdf24-toolbox)
    - [4.9 Registry settings related to PDF24 Tray Icon](#49-registry-settings-related-to-pdf24-tray-icon)
    - [4.10 Registry settings related to PDF24 Reader](#410-registry-settings-related-to-pdf24-reader)
    - [4.11 Registry settings related to PDF24 DocTool](#411-registry-settings-related-to-pdf24-doctool)
    - [4.12 Registry settings related to PDF24 Backend](#412-registry-settings-related-to-pdf24-backend)
    - [4.13 Registry settings related to PDF24 Launcher](#413-registry-settings-related-to-pdf24-launcher)
    - [4.14 Registry settings related to PDF24 Shell File Tools](#414-registry-settings-related-to-pdf24-shell-file-tools)
  - [5 Translation of language files](#5-translation-of-language-files)
  - [6 PDF Printers](#6-pdf-printers)
    - [6.1 Ports](#61-ports)
  - [7 pdf24-PrinterInstall.exe](#7-pdf24-printerinstallexe)
    - [7.1 Command line](#71-command-line)
  - [8 pdf24.exe](#8-pdf24exe)
    - [8.1 Command line](#81-command-line)
      - [8.1.1 Windows service](#811-windows-service)
      - [8.1.2 Server mode](#812-server-mode)
      - [8.1.3 Client mode](#813-client-mode)
  - [9 pdf24-Toolbox.exe](#9-pdf24-toolboxexe)
    - [9.1 Command line](#91-command-line)
      - [9.1.1 Open the UI](#911-open-the-ui)
      - [9.1.2 Process a job](#912-process-a-job)
      - [9.1.3 Convert HTML to PDF](#913-convert-html-to-pdf)
      - [9.1.4 Create invoices](#914-create-invoices)
    - [9.2 Notes about the Internet Explorer 11 component used in prior versions](#92-notes-about-the-internet-explorer-11-component-used-in-prior-versions)
    - [9.3 Notes about Windows Server and Citrix](#93-notes-about-windows-server-and-citrix)
  - [10 pdf24-Ocr.exe](#10-pdf24-ocrexe)
    - [10.1 Command line](#101-command-line)
    - [10.2 Local installation of all language file](#102-local-installation-of-all-language-file)
  - [11 pdf24-DocTool.exe](#11-pdf24-doctoolexe)
    - [11.1 Command line](#111-command-line)
      - [11.1.1 General format and options](#1111-general-format-and-options)
      - [11.1.2 Convert files to PDF and open PDF24 Assistant](#1112-convert-files-to-pdf-and-open-pdf24-assistant)
      - [11.1.3 Web-optimize PDF files](#1113-web-optimize-pdf-files)
      - [11.1.4 Apply a profile to input files](#1114-apply-a-profile-to-input-files)
      - [11.1.5 Join input files and create an output PDF file](#1115-join-input-files-and-create-an-output-pdf-file)
      - [11.1.6 Open the extract pages UI](#1116-open-the-extract-pages-ui)
      - [11.1.7 Split PDF files after each page](#1117-split-pdf-files-after-each-page)
      - [11.1.8 Rotate pages of PDF files automatically](#1118-rotate-pages-of-pdf-files-automatically)
      - [11.1.9 Convert from PDF](#1119-convert-from-pdf)
      - [11.1.10 Convert to PDF](#11110-convert-to-pdf)
      - [11.1.11 Upload a file via the HTTP protocol](#11111-upload-a-file-via-the-http-protocol)
      - [11.1.12 Send files via E-Mail](#11112-send-files-via-e-mail)
      - [11.1.13 Send files using PDF24 fax](#11113-send-files-using-pdf24-fax)
      - [11.1.14 Execute the print command using ShellExecute](#11114-execute-the-print-command-using-shellexecute)
      - [11.1.15 Extract files from the clipboard and creates a PDF of it](#11115-extract-files-from-the-clipboard-and-creates-a-pdf-of-it)
      - [11.1.16 Capture files via TWAIN interface](#11116-capture-files-via-twain-interface)
      - [11.1.17 Capture the screen](#11117-capture-the-screen)
      - [11.1.18 Crop PDF files](#11118-crop-pdf-files)
      - [11.1.18 Compress PDF files](#11118-compress-pdf-files)
  - [12 pdf24-Reader.exe](#12-pdf24-readerexe)
    - [12.1 Command line](#121-command-line)
  - [13 FAQ](#13-faq)
    - [13.1 The PDF printer is not working properly. Print jobs are stuck in the print queue. What to do?](#131-the-pdf-printer-is-not-working-properly-print-jobs-are-stuck-in-the-print-queue-what-to-do)
    - [13.2 How to stop/remove the PDF24 autostart entry?](#132-how-to-stopremove-the-pdf24-autostart-entry)
    - [13.3 How to update from version 9.x and keep settings?](#133-how-to-update-from-version-9x-and-keep-settings)

## 1 Preamble

The [PDF24 Creator](https://tools.pdf24.org/creator) is a free and popular PDF solution with many features for Windows. The software brings all PDF24 tools as offline version, so all files stay on your PC and GDPR is not an issue here. The software has been under continuous development since 2006 and has delighted many people and businesses around the world. Companies can also use PDF24 Creator free of charge.

A MAC version is not available. MAC users can use the [PDF24 Online Tools](https://tools.pdf24.org/), which are also free of charge.

## 2 EXE installer

The EXE installer is based on *Inno Setup*. The installation process can be controlled via command line arguments. Besides the arguments Inno Setup supports, there are other PDF24 specific arguments.

- `/SILENT`

  Installs the PDF24 Creator without user interaction. The installation process is shown.

- `/VERYSILENT`

  Installs the PDF24 Creator without user interaction. The installation process is not shown.

- `/NOUPDATE`

  Installs the PDF24 Creator without update checking. No updates are searched and no updates are installed.

- `/NoReaderReg`

  This switch prevents PDF24 Reader from being registered for PDF files. This switch is useful if, for example, an alternative PDF reader is installed and should be used.

- `/LANG=language`

  Specifies the language to use. The placeholder language can be German, English, French, Italian, Russian, Spanish, Portuguese

- `/SAVEINF="filename"`
  Instructs setup to save installation settings to the specified file.

- `/LOADINF="filename"`

  Instructs Setup to load the settings from the specified file after having checked the command line. This file can be prepared using the '/SAVEINF=' command as explained below.

- `/NORESTART`

  Instructs Setup not to reboot even if it's necessary.

- `/NOCANCEL`

  Prevents the user from cancelling during the installation process, by disabling the Cancel button and ignoring clicks on the close button. Useful along with '/SILENT' or '/VERYSILENT'.

`/SP-`
Disables the "This will install... Do you wish to continue?" prompt at the beginning of Setup.

`/COMPONENTS="comma separated list of component names"`

  Overrides the default component settings. Using this command line parameter causes the setup to automatically select a custom type. Only the specified components will be selected; the rest will be deselected. If a component name is prefixed with a "!" character, the component will be deselected. This parameter does not change the state of components that include the fixed flag.

  Currently, the setup contains the following components:

  - `pdfPrinter`
  - `faxPrinter`
  - `ghostscript`
  - `qpdf`
  - `jre`
  - `tesseract`
  - `webview2` - since version 11.10.0



### 2.1 Examples of use

- Installs default components silently and disables updates
  ```
  pdf24-creator.exe /VERYSILENT /NOUPDATE
  ```

- Installs default components without user interaction and disables updates
  ```
  pdf24-creator.exe /SILENT /NOUPDATE
  ```

- Installs only PDF printer component silently and disables updates
  ```
  pdf24-creator.exe /VERYSILENT /NOUPDATE /COMPONENTS=pdfPrinter
  ```

- Installs PDF24 silently but does not install Webview2. This makes sense only if you have evergreen Webview2 installed on your system. Otherwise the PDF24 Toolbox will not work.
  ```
  pdf24-creator.exe /SILENT /COMPONENTS=!webview2
  ```

## 3 MSI installer

PDF24 provides a MSI package of the PDF24 Creator which you can use to distribute the software on computers. The MSI installation can be customized via command line arguments. Currently, the following arguments are available:

`AUTOUPDATE=Yes|No`

Enables or disables the auto-update feature of the PDF24. Set the public property `AUTOUPDATE=No` for disabling the auto-update feature. The feature is disabled by default.

`DESKTOPICONS=Yes|No`

Creates or disables the Windows Desktop icons for PDF24-PDF and PDF24-Fax. Set the public property `DESKTOPICONS=No` for disabling the Windows Desktop icons. The Windows Desktop icons will be created by default.

`FAXPRINTER=Yes|No`

Enables or disables the Fax printer feature of PDF24. Set the public property `FAXPRINTER=No` for disabling the Fax printer feature. The feature is enabled by default.

`REGISTERREADER=Yes|No`

Enables or disables PDF24 Reader registration. Default value is `Yes`.

`EXTENDSHELLCONTEXTMENU=Yes|No`

Extends the shell context menu with the PDF24 entry. The DLL has some advantages and improves productivity. Default value is `Yes`.

`USESHELLEXTENSIONDLL=Yes|No`

If set to `Yes`, then the new shell context menu extension DLL is used instead of a static registry entry. Default value is `No`. The DLL has some advantages and improves productivity. Updates can be a bit more difficult because the DLL is loaded and blocked by Explorer, so that the Explorer has to be restarted for an update.

*Example usage of the MSI properties:*

```
pdf24-creator.msi AUTOUPDATE=[Yes|No] DESKTOPICONS=[Yes|No] FAXPRINTER=[Yes|No] /[qr|qb|qn|...]
```

The user interface, that installer displays, can be controlled with the `/q` options:

- `/qn` No interface
- `/qb` Basic interface - just a small progress dialog
- `/qb!` Like /qb, but hide the Cancel button
- `/qr` Reduced interface - display all dialogs that don't require user interaction (skip all modal dialogs)
- `/qn+` Like /qn, but display "Completed" dialog at the end
- `/qb+` Like /qb, but display "Completed" dialog at the end

### 3.1 Examples of use:

- Installs PDF24 but does not install Webview2. This makes sense only if you have evergreen Webview2 installed on your system. Otherwise the PDF24 Toolbox will not work.
  ```
  msiexec /i pdf24-creator.msi ADDLOCAL=ALL REMOVE=WebView2
  ```

## 4 Registry Settings

The PDF24 Creator stores settings into the Windows registry. Since version 10, the user settings are stored under `HKCU\SOFTWARE\PDF24`. The application settings and settings that apply to all users are stored under `HKLM\SOFTWARE\PDF24`. Older versions stored the settings under `HKCU\SOFTWARE\PDFPrint` and `HKLM\SOFTWARE\PDFPrint`.

The settings under HKCU overwrite the settings from the HKLM area. There is also an option to give more weight to the settings under HKLM. This can be achieved by putting a `!` in front of the key name. Then the value from HKLM is always taken in any case, regardless of what is in HKCU.

Most of the settings can be manipulated by the PDF24 Settings GUI. If you make changes in the GUI then these changes will change the registry values.

### 4.1 Common registry settings

- `DeletePrintJobsWithError` (HKLM, DWORD)

  Setting to control whether print jobs with an error blocking the PDF printer should be deleted or not. This is disabled by default. The value can be `0` or `1`.

- `EmailInterface` (HKCU, HKLM, SZ)

  Setting to specify the used mail interface when using the mail function. Supported values are `mapi`, `outlook_ole`, `pdf24`.

- `InstallDir` (HKLM, SZ)

  The file system path under which the PDF24 Creator is installed.

- `InstallationID` (HKLM, SZ)

  The ID of the installation generated by the installer.

- `UpdateMode` (HKLM, DWORD)

  The update mode. Can be `0` for automatic updates, `1` for notifying if an update is available or `2` to disable updates.

- `Language` (HKCU, HKLM, SZ)

  The language of the app. The value is the name of a language file, e.g. `English` or `German`. Language files are stored in the `lang` directory.

- `LogoClickUrl` (HKLM, SZ)

  URL which will be opened if someone clicks the banner.

- `PdfSecurityTool` (HKCU, HKLM, SZ)

  The app used to apply PDF security. Can be `gs` or `qpdf`. `qpdf` is used by default because 256 bit security is supported. No longer supported in version `11.7.0`.

- `Img2PDFJPEGQuality` (HKCU, HKLM, DWORD)

  JPEG image quality used when converting images to PDF. Default value is 100.

- `Img2PDFDPI` (HKCU, HKLM, DWORD)

  DPI value used when convereting images to PDF. Default value is 144.

- `Img2PDFPassThroughJPEGImages` (HKCU, HKLM, DWORD)

   Boolean value to control whether to pass through JPEG images as is. Default value is 1 which means enabled. Set to 0 to disable this behavior. If disabled, JPEG images are re-encoded with the quality value found in `Img2PDFJPEGQuality`.

- `NoCertManagerAccess` (HKCU, HKLM, DWORD)

  Can be `1` to disable access to the cert manager app or `0` to enable it. The default value is 0.

- `NoDelayedToForegroundOnNewFile` (HKCU, HKLM, DWORD)

  Can be `1` to disable this behavior or `0` to enable it. The default value is 0.

- `NoEmbeddedBrowser` (HKCU, HKLM, DWORD)

  Can be `1` to disable embedded browsers or `0` to enable it. The default value is 0.

- `NoFax` (HKCU, HKLM, DWORD)

  Can be `1` to disable PDF24 fax or `0` to enable it. The default value is 0.

- `NoFaxProfile` (HKCU, HKLM, DWORD)

  Can be `1` to disable the fax output profile or `0` to enable it. The default value is 0.

- `NoMail` (HKCU, HKLM, DWORD)

  Can be `1` to disable the mail function or `0` to enable it. The default value is 0.

- `NoOCR` (HKCU, HKLM, DWORD)

  Can be `1` to disable the OCR feature or `0` to enable it. The default value is 0.

- `NoOnlineConverter` (HKCU, HKLM, DWORD)

  Can be `1` to disable the usage of the online converter if no local converter is available or `0` to enable it. The default value is 0.

- `NoOnlinePdfTools` (HKCU, HKLM, DWORD)

  Can be `1` to disable the online PDF tools links in the app or `0` to enable it. The default value is 0.

- `NoPDF24MailInterface` (HKCU, HKLM, DWORD)

  Can be `1` to disable the PDF24 mail interface or `0` to enable it. The default value is 0.

- `NoScreenCapture` (HKCU, HKLM, DWORD)

  Can be `1` to disable the screen capture tool or `0` to enable it. The default value is 0.

- `NoSelfSignedCertCreation` (HKCU, HKLM, DWORD)

  Can be `1` to disable the creation of self signed certs or `0` to enable it. The default value is 0.

- `NoShellContextMenuExtension` (HKCU, HKLM, DWORD)

  Can be `1` to disable shell context menu extensions or `0` to enable it. The default value is 0.

- `NoShellBackgroundContextMenuExtension` (HKCU, HKLM, DWORD)

  Can be `1` to disable background shell context menu extensions or `0` to enable it. The default value is 0.

- `NoShellDirectoryContextMenuExtension` (HKCU, HKLM, DWORD)

  Can be `1` to disable directory context menu extensions or `0` to enable it. The default value is 0.

- `NoShellFileContextMenuExtension` (HKCU, HKLM, DWORD)

  Can be `1` to disable file context menu extensions or `0` to enable it. The default value is 0.

- `NoTrayIcon` (HKCU, HKLM, DWORD)

  Can be `1` to disable the tray icon or `0` to enable it. The default value is 0.

- `NoTwainImport` (HKCU, HKLM, DWORD)

  Can be `1` to disable the twain import feature or `0` to enable it. The default value is 0.

- `NoReader` (HKCU, HKLM, DWORD)

  Can be `1` to disable the PDF24 Reader or `0` to enable it. The default value is 0.

- `NoCompress` (HKCU, HKLM, DWORD)

  Can be `1` to disable PDF24 Compress or `0` to enable it. The default value is 0.

- `NoToolbox` (HKCU, HKLM, DWORD)

  Can be `1` to disable PDF24 Toolbox or `0` to enable it. The default value is 0.

- `NoUpdateCheckBtns` (HKCU, HKLM, DWORD)

  Can be `1` to disable update check buttons or `0` to enable it. The default value is 0. Option is available since version 10.2.0.

- `mergePdfsProvider` (HKCU, HKLM, REG_SZ)

  Can be `qpdf` to use QPDF for merging or `gs` to use Ghostscript. The default value is `qpdf`.

- `joinPdfsProvider` (HKCU, HKLM, REG_SZ)

  Can be `qpdf` to use QPDF for joining, `gs` to use Ghostscript or `pdfbox` to use PDFBox. `pdfbox` is vailable since version 11.2.0. The default value is `pdfbox`.

- `useRoamingAppData` (HKCU, HKLM, DWORD)

  Can be `1` to use the `%APPDATA%\PDF24` folder to store data which is normally below the `Roaming` folder or 0 to use the `%LOCALAPPDATA%\PDF24` folder. The default value is 0. Option available since version 11.19.0.

### 4.2 Registry settings related to Webview2

- `webview2.useEvergreen` (HKCU, HKLM, DWORD)

  Can be `1` to use the evergreen version of Webview2 which is installed and updated by Microsoft. Default is `0` which means that the Webview2 version is used which is installed with the PDF24 Creator. If the Webview2 version installed by PDF24 is not available then PDF24 tries to use the evergreen version.

- `webview2.enableContextMenu` (HKCU, HKLM, DWORD)

  This option controls whether the default context menu of Webview2 is enabled or not. A value of `1` activates the context menu. This is the default option. A value of `0` disables the menu. This option is available since version 11.11.0.

- `webview2.useRoamingAppData` (HKCU, HKLM, DWORD)

  Can be `1` to use the `%APPDATA%\PDF24\WebView2` folder to store data which is normally below the `Roaming` folder or 0 to use the `%LOCALAPPDATA%\PDF24\WebView2` folder. The default value is 0. Option available since version 11.19.0.

### 4.3 Registry settings related to PDF24 Assistant

- `assistant.closeAfterEmail` (HKCU, HKLM, DWORD)

  Can be `1` to close the assistant after using the mail function or `0` to keep the app open. The default value is 1.

- `assistant.closeAfterSave` (HKCU, HKLM, DWORD)

  Can be `1` to close the assistant after using the save file function or `0` to keep the app open. The default value is 1.

- `assistant.fixedSaveDir` (HKCU, HKLM, SZ)

  The directory used to initialize the save file dialog box when saving a file.

- `assistant.joinFilesUseFirstName` (HKCU, DWORD)

    Can be `1` to use the name of the first file for the joined file or `0` to disable this. The default value is 0.

- `assistant.mailNamePrompt` (HKCU, HKLM, DWORD)

  Can be `1` to prompt for email file name or `0` to disable this. The default value is 1.

- `assistant.openPDFAfterSave` (HKCU, HKLM, DWORD)

  Can be `1` to open the PDF file after using the save function or `0` to disable this. The default value is 0.

- `assistant.lastProfile` (HKCU, SZ)

  The ID of the last used profile.

- `assistant.lastSaveDir` (HKCU, SZ)

  The last used directory into which a file has been saved.

 `assistant.hideElements` (HKLM, HKCU, SZ)

  The string value is a comma-separated list with IDs for elements that are to be hidden. Currently there are the following IDs for elements that can be hidden:

  `fileListAdd`, `fileListRemove`, `fileListUp`, `fileListDown`, `fileListEdit`, `fileListSort`, `fileListJoin`, `fileListNum`, `saveAsPdf`, `saveAs`, `openInCreator`, `preview`, `view`, `email`, `fax`, `print`, `compress`, `ocr`, `about`, `updateCheck`, `settings`, `outputProfiles`

### 4.4 Registry settings related to PDF24 Compress

- `compress.colorModel` (HKCU, SZ)

  The color model used to initialize the settings form.

- `compress.dpi` (HKCU, SZ)

  The DPI value used to initialize the settings form.

- `compress.imageQuality` (HKCU, SZ)

  The image quality value used to initialize the settings form.

- `compress.saveFileSuffix` (HKCU, SZ)

  The save file name suffix used to initialize the settings form.

### 4.5 Registry settings related to PDF24 Creator

- `creator.explorerLastDir` (HKCU, SZ)

  The last opened directory in the file explorer of the creator.

- `creator.explorerListViewMode` (HKCU, DWORD)

  The list view mode of the file list of the file explorer.

- `creator.hasExplorer` (HKCU, DWORD)

  Can be `1` to enable the file explorer or `0` to disable it. Default value is 1.

- `creator.jobDlgDisplayMode` (HKCU, DWORD)

  The mode job dialogs are disabled.

- `creator.windowPlacement` (HKCU, SZ)

  Stores the last window placement on the screen.

- `creator.thumbResolution` (HKCU, HKLM, DWORD)

  This value sets the DPI used to generate thumbnails in the Creator. The default value is 72. Increasing this value slows thumbnail generation, but increases thumbnail quality. Lower values decrease the quality, but result in faster image generation. If the quality of thumbnails is too low, then you should increase the value.

### 4.6 Registry settings related to PDF24 Output Profile Manager

- `formatOptions.lastProfile` (HKCU, SZ)

  The ID of the last used profile.

### 4.7 Registry settings related to PDF24 OCR

- `ocr.dpi` (HKCU, SZ)

  The DPI value used to initialize the settings form.

- `ocr.jobs` (HKCU, SZ)

  The number of jobs processed in parallel used to initialize the settings form.

- `ocr.language` (HKCU, SZ)

  The language code used to initialize the settings form.

- `ocr.outputDir` (HKCU, SZ)

  The output directory used to initialize the settings form.

- `ocr.profile` (HKCU, SZ)

  The ID of a profile used to initialize the settings form.

- `ocr.saveFilesInPlace` (HKCU, SZ)

  The save files in place option value used to initialize the settings form. Can be `true` or `false`.

- `ocr.saveFileSuffix` (HKCU, SZ)

  The save file name suffix used to initialize the settings form.

- `ocr.skipFilesWithText` (HKCU, SZ)

  The skip files with text value used to initialize the settings form. Can be `true` or `false`.

- `ocr.skipPagesWithText` (HKCU, SZ)

  The skip pages with text value used to initialize the settings form. Can be `true` or `false`.

### 4.8 Registry settings related to PDF24 Toolbox

- `toolbox.showScriptErrors` (HKCU, HKLM, DWORD)

  Can be `1` to show script errors if they occur or `0` to hide them. The default value is 1. Option is available since version 10.0.12.

- `feature.toolbox.XXX` (HKCU, HKLM, DWORD)

  These values control whether certain features, tools and functions are visible in the toolbox or not. Each value can be `1` or `0`. `1` means enabled, shown or available and `0` means disabled, hidden or unavailable. The default value is 1. The prefix `XXX` can be one of the following names:  `organize`, `merge`, `compress`, `edit`, `convertToPdf`, `convertPdfTo`, `protect`, `unlock`, `split`, `rotatePages`, `removePages`, `extractPages`, `sortPages`, `imagesToPdf`, `pdfToImages`, `extractImages`, `createJobApplication`, `ocr`, `webOptimize`, `addWatermark`, `addPageNumbers`, `overlay`, `compare`, `sign`, `annotate`, `blacken`, `crop`, `flatten`, `fax`, `screenCapture`, `twainImport`, `removeMetadata`, `editMetadata`, `createInvoice`, `openPdfReader`, `openCompress`, `openOcr`, `openFileTools`, `openRemotePrintManager`, `openFax`, `openOnlinePdfTools`, `openSettings`, `openOutputProfilesManager`, `openAssistant`, `openCreator`, `jobMonitorFooter`, `nup`, `changePdfPageSize`

- `blackenSecurity.dpi` (HKCU, HKLM, DWORD)

  DPI value used to render modified pages when saving a file changed in the blacken PDF tool. Default value is 150. Option is available since version 11.10.0.

- `blackenSecurity.jpgQuality` (HKCU, HKLM, DWORD)

  JPG quality value used to render modified pages when saving a file changed in the blacken PDF tool. Default value is 95. Option is available since version 11.10.0.

- `toolbox.hideElements` (HKLM, HKCU, SZ)

  The string value is a comma-separated list with IDs for elements that are to be hidden. Currently there are the following IDs for elements that can be hidden:

  `createInvoiceVisuallyTool`, `createInvoiceVisuallyTool`, `footerUpdateCheck`, `footerSettings`, `organizePdfTool`, `mergePdfTool`, `compressPdfTool`, `editPdfTool`, `convertToPdfTool`, `convertPdfToTool`, `protectPdfTool`, `unlockPdfTool`, `splitPdfTool`, `rotatePdfPagesTool`, `removePdfPagesTool`, `extractPdfPagesTool`, `sortPdfPagesTool`, `imagesToPdfTool`, `pdfToImagesTool`, `extractPdfImagesTool`, `createJobApplicationTool`, `ocrPdfTool`, `webOptimizePdfTool`, `addWatermarkToPdfTool`, `addPageNumbersToPdfTool`, `overlayPdfTool`, `comparePdfTool`, `signPdfTool`, `annotatePdfTool`, `blackenPdfTool`, `cropPdfTool`, `flattenPdfTool`, `sendFaxTool`, `captureScreenTool`, `twainImportTool`, `createInvoiceTool`, `removePdfMetadataTool`, `editPdfMetadataTool`, `pagesPerSheetTool`, `changePdfPageSizeTool`, `editPdfBookmarksTool`, `repairPdfTool`, `creatorApp`, `pdfReaderApp`, `pdfPrinterAssistantApp`, `compressPdfApp`, `ocrPdfApp`, `fileToolsApp`, `remotePrinterManagerApp`, `faxApp`, `onlinePdfToolsApp`, `settingsApp`, `outputProfilesManagerApp`

### 4.9 Registry settings related to PDF24 Tray Icon

- `trayIcon.openLauncher` (HKCU, HKLM, DWORD)

  Can be `1` to open the Launcher instead of the Toolbox. The default value is 0. Option is available since version 10.0.12.

- `trayIcon.openTool` (HKCU, HKLM, SZ)

  Can be `launcher`, `toolbox`, `creator`. The default value is `toolbox`. Option is available since version 10.1.0.

### 4.10 Registry settings related to PDF24 Reader

- `reader.openInExistingInstance` (HKCU, DWORD)

  Can be `1` to open files in an existing reader instance if available. The default value is 1. If the value is 0, each file is opened in a seperate instance.

- `reader.enableJavaScript` (HKCU, DWORD)

  Can be `1` to enable javascript or 0 to disable it.

- `reader.enableXfa` (HKCU, DWORD)

  Can be `1` to enable XFA or 0 to disable it.

The PDF24 Reader also stores settings into the Windows registry under the path `HKCU\SOFTWARE\PDF24\PDF24 Reader`. The following entries are currently supported here:

- `ShowNavigation` (HKCU, DWORD)

  Can be `1` to show the navigation pane of a file or 0 to hide it.

### 4.11 Registry settings related to PDF24 DocTool

- `docTool.forceWordPrint` (HKLM, HKCU, DWORD)

  Can be `1` to force printing Word files to the PDF printer to convert the file to PDF. We used this mode in versions before `11.8.0` because it was the only available mode. Since version `11.8.0` we have added a new mode for converting Word files to PDF. The new mode uses the Office Automation APIs to export a PDF directly. This mode gives better results and metadata like links can be exported as well. If this new mode does not work for you, you can disable it with this registry value. Just set `docTool.forceWordPrint=1` to force the old mode.

- `docTool.forceExcelPrint` (HKLM, HKCU, DWORD)

  Same as `docTool.forceWordPrint` but for Excel files.

- `docTool.forcePowerpointPrint` (HKLM, HKCU, DWORD)

  Same as `docTool.forceWordPrint` but for Powerpoint files.

### 4.12 Registry settings related to PDF24 Backend

- `backend.autoLog` (HKLM, HKCU, DWORD)

  Can be `1` to redirect the output of pdf24.exe to a temporary file. If this value is `0`, the output of pdf24.exe will not be logged to a temporary file. The location of the file depends on the process context. This can be the user's temporary file folder or the default system folder for temporary files.

### 4.13 Registry settings related to PDF24 Launcher

- `launcher.hideElements` (HKLM, HKCU, SZ)

  The string value is a comma-separated list with IDs for elements that are to be hidden. Currently there are the following IDs for elements that can be hidden:

  `toolbox`, `creator`, `compress`, `fileTools`, `pdfReader`, `assistant`, `ocr`, `twainImport`, `screenCapture`, `outputProfiles`, `pageExtract`, `onlinePdfTools`, `onlineConverter`, `fax`, `about`, `settings`, `updateCheck`

### 4.14 Registry settings related to PDF24 Shell File Tools

- `fileTools.hideElements` (HKLM, HKCU, SZ)

  The string value is a comma-separated list with IDs for elements that are to be hidden. Currently there are the following IDs for elements that can be hidden:

  `fileListAdd`, `fileListRemove`, `fileListUp`, `fileListDown`, `fileListSort`, `fileListNum`, `joinPdf`, `compressPdf`, `openWithToolbox`, `email`, `convertToPdf`, `openWithCreator`, `fax`, `convertTo`, `applyProfile`, `printAsPdf`, `convertToPdfOnline`, `optimizeForWeb`, `extractPages`, `splitPageByPage`, `recognizeText`, `lockPdf`, `unlockPdf`, `about`, `updateCheck`, `settings`

## 5 Translation of language files

The PDF24 Creator has language files to offer the PDF printer in languages other than German and English. The languages German and English are maintained by the PDF24 team and are made available to every version. If you can translate into another language, we would be pleased if you could translate an existing language file into this language so that we can offer the PDF24 Creator in this language as well.

If you notice an error in one of the existing language files when translating a language file, tell us and we will fix these mistakes.

The language files of the PDF24 Creator can be found in the `lang` folder in the PDF24 installation directory. The language files end with the extension `.lang` and can be edited with a text editor. The language files are to be encoded with UTF-8 with BOM. A text editor like Notepad++ recognizes this automatically.

A language file is structured line by line. Lines beginning with `#` are comments and do not need to be translated. Each line contains the key and the text of a language element. Key and text are separated by a `=`. Only the text may be translated, the key must remain as it is so that the PDF24 Creator can find a text element. Here is an example:

```
#
# PDF Quality
#
general/pdf-quality = Quality of PDF
general/quality/low = Low quality
general/quality/medium = Medium quality
general/quality/good = Good quality
```

In the example above, e.g. `general/pdf-quality` is a key and `Quality of PDF` is the text to that key. Only the text `Quality of PDF` may be translated.

Already translated language files can contain the two characters `#!` as first characters in a line. This indicates that this line still needs to be translated. If new language elements are added to the PDF24 Creator, we add the missing elements to all language files with the content from the English language file and mark these lines with the characters `#!`. These lines are not yet translated. Translators can use this method to find elements that have not yet been translated and translate them. After the translation, the `#!` string must be removed.

Please send your translated or updated language file to team@pdf24.org. We will then integrate your translation into the PDF24 Creator.

## 6 PDF Printers

The PDF24 Creator is able to manage multiple PDF printers. Each PDF printer can be configured differently. For example, if you want to save a file automatically, you can easily do this with a dedicated PDF printer. To manage PDF printers, use the settings utility. There you can add, remove or configure PDF printers.

### 6.1 Ports

PDF printers use special ports from the system to receive printer data. The default or first PDF printer created by the installer has the port `\\.\pipe\PDFPrint`. Additional PDF printers will have ports like `\\.\pipe\PDFPrint-1`, `\\.\pipe\PDFPrint-2` and so on.

If you have problems with your default PDF printer, e.g. if print jobs get stuck in the printer queue, please check the port to which the PDF printer is connected to. Make sure, that the default PDF printer is connected to port `\\.\pipe\PDFPrint`. If this is not the case, change this manually in the printer properties via the control panel of Windows.

## 7 pdf24-PrinterInstall.exe

The executable file `pdf24-PrinterInstall.exe` is used to install PDF printers. The installer uses this process to install the default PDF printer and the settings app uses it to install additional ones.

### 7.1 Command line

```
pdf24-PrinterInstall.exe [OPTIONS] ACTIONS
```

Actions are used to tell the printer installer what to do. See below for supported actions:

- `installPrinterDriver`

  This action is used to install the PDF24 printer driver which is required for the installation of PDF printers.

- `deletePrinterDriver`

  This action is used to uninstall the PDF24 printer driver.

- `installPrinter`

  This action is used to install a PDF printer.

- `installPort`

  This action is used to install just a local port. This is normally done automatically when the `installPrinter` action is used.

- `deletePrinter`

  This action is used to delete a PDF printer.

- `deletePrinterByPortName`

  This action is used to delete a printer by port name. Every printer that uses the specified port is deleted.

- `addService`

  This action is used to add a printer service entry into the registry. PDF24 then uses that information, listens on the port, receives and processes incoming print jobs.

- `printPorts`, `printPrinters`, `printPrinterDrivers`

  Diese Aktionen listen die Ports, Drucker und Treiber auf.

Options are used to give the actions the necessary information. See below for supported options:

- `-printerName XXX`

  Set the name of the printer for the `installPrinter` and `deletePrinter` action.

- `-portName XXX`

  Sets the name of the port for the `installPrinter` and `deletePrinterByPortName` actions. The port name of the default PDF printer is `\\.\pipe\PDFPrint`. Additional PDF printers are given the port name `\\.\pipe\PDFPrint-1`, `\\.\pipe\PDFPrint-2` and so on.

- `-serviceName XXX`

  Set the name of the PDF printer service entry for the `addService` action. Service names should be unique.

- `-upgrade`

  The upgrade flag can be used with the `installPrinterDriver` action to upgrade the driver if a driver with the same name is already installed.

The PDF24 installer uses the following command to install the PDF printer driver:

```
pdf24-PrinterInstall.exe -upgrade installPrinterDriver
```

The PDF24 installer uses the following command to install the default PDF printer:

```
pdf24-PrinterInstall.exe -printerName PDF24 -portName "\\.\pipe\PDFPrint" installPrinter
```

## 8 pdf24.exe

The `pdf24.exe` file provides backend services that are mainly responsible for listening to PDF printer ports, receiving print jobs, forwarding them to the correct user and opening the frontend application where the user can save the new file. The PDF24 Windows Seervice is also located here.

### 8.1 Command line

#### 8.1.1 Windows service

The `pdf24.exe` also provides the Windows service that must be installed and started in order for the PDF printers to receive print jobs. Without this service the PDF printers will not work. The installation/uninstallation is done automatically via the PDF24 installer. The installer runs the folowing commands to install and start the service and to stop and uninstall it:

```
pdf24.exe -install
pdf24.exe -uninstall
pdf24.exe -start
pdf24.exe -stop
```

If the service is no longer available in Windows, perhaps due to a Windows update, you can use the above command line to reinstall and restart it. The installation can only be performed if you run the command with extended administrator privileges. To do this, you must open a console by clicking "Run as administrator".

The Windows Service is started by the following command line:

```
pdf24.exe -service
```

#### 8.1.2 Server mode

`pdf24.exe` can be started as server for the PDF printers. The server listens on the named pipes which are conntected to the installed PDF printers. If data is received, the server consumes it and forwards it to the right client instance. To start in server mode, use the `-server` switch. This mode is rarely used because the PDF24 Windows service mentioned above (`-service` switch) acts as a server by default. The advantage of the service is that it can start a user instance of `pdf24.exe` if it does not exist, so that the user can receive his print job. It's not a good idea to use the service and a seperate server instance together.

```
pdf24.exe -server
```

#### 8.1.3 Client mode

The user instance of `pdf24.exe` is normally started in client mode. In client mode, the process waits for print jobs received by the PDF24 Windows service or `pdf24.exe` server instance and handles them it if one is received, depending on the PDF printer configuration. The client mode is started like this:

```
pdf24.exe -client
```

Server and client mode can be in the same user instance. To do this, just use both flags together:

```
pdf24.exe -server -client
```

## 9 pdf24-Toolbox.exe

The PDF24 Toolbox currently uses Webview2 to display the GUI. This normally works out of the box and you do not need to setup anything. By default PDF24 uses the WebView2 version which is installed by PDF24. This version is stored in the subfolder `WebView2` of the PDF24 installation folder. You can also force the use of the evergreen version of Webview2. You can do this with the registry option `webview2.useEvergreen`.

### 9.1 Command line

#### 9.1.1 Open the UI

```
pdf24-Toolbox.exe [-verb xxxx] [FILES]
```

If you simply run `pdf24-Toolbox.exe` without options and files, the GUI opens and the start page is displayed where you can choose a function.

If you run `pdf24-Toolbox.exe` without options but with files, the GUI opens and the start page is displayed where you can select a tool to use with these files. Above the possible tools the files are displayed.

`-verb xxxx`

The verb can be used to tell the toolbox which tool to open. The verb to page mapping is stored in the file `lib/toolbox/verbToPage.csv`. For example, `merge` opens the merge PDF tool and `compress` opens the PDF compression tool.

If you also specify files on command line, then the files are automatically loaded into the file box of the corresponding tool.

#### 9.1.2 Process a job

```
pdf24-Toolbox.exe -processJob INPUT_FILE OUTPUT_FILE
```

The `-processJob` command line switch can be used to process jobs as if you were using the UI. `INPUT_FILE` and `OUTPUT_FILE` are both JSON files. A job file must contain all the necessary information for a tool handler to process the job. The result of the handler is then stored as a JSON object in the `OUTPUT_FILE` file. The structure of the job file depends on the tool used. When you use the UI of a particular tool and if you then click the main action button of that tool, the toolbox internally creates a job file and stores it in the users temporary files folder, which is `%TEMP%/PDF24`. The command files have the extension `.json`. If you open such a file, you can see the structure. Such a job file could then be used as input for the `-processJob` handler.

#### 9.1.3 Convert HTML to PDF

```
pdf24-Toolbox.exe -htmlToPdf INPUT_FILE OUTPUT_FILE [-printBackground true|false] [-orientation landscape|portrait] [-paperSize SIZE] [-viewportSize SIZE] [-margins MARGINS]
```

The `-htmlToPdf` command line switch can be used to convert HTML files to PDF. This switch takes two arguments, the input HTML file and the output PDF file name. The are some optional arguments that can be used to customize the output.

- `[-printBackground true|false]` specified whether to print the background or not.

- `[-orientation landscape|portrait]` sets the orientation of the output PDF file. Default is `portrait`.

- `[-paperSize SIZE]` specifies the paper size. `SIZE` can be `A0`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `letter`, `legal` or a size like `210x297mm`, `8.27x11.67inch` or `595x842pt`.

- `[-viewportSize SIZE]` specifies the size of the viewport. `SIZE` can be like `1024x800px`, `210x297mm`, `8.27x11.67inch` or `595x842pt`.

- `[-margins MARGINS]` specifies top, right, bottom, left page margins like `20mm` (top, right, bottom, left set to 20mm), `20mm,15mm` (top, bottom set to 20mm and right, left set to 15mm) or `20mm,15mm,20mm,15mm` (order is top, right, bottom, left).

#### 9.1.4 Create invoices

```
pdf24-Toolbox.exe -createInvoice INPUT_FILE OUTPUT_FILE [-outputType OUTPUT_TYPE] [-pdfFile PDF_FILE] [-pdfaFile PDFA_FILE] [-passthrough] [-langCode xx] [-langFile LANG_FILE] [-regenerateXml]
```

The `-createInvoice` switch can be used to create normal and electronic invoices. The switch takes two following arguments, the input file and the output file. This handler is available since version `11.22.0`.

`INPUT_FILE` can be a JSON file containing an object with the data to be converted to an invoice output file. The JSON data set corresponds to what you get when you export an invoice in the corresponding tool for creating e-invoices. When you export such a file, then you will see how the file is structured. Not all of the information in this file is required, as the invoice generator is able to calculate some information itself. Since version `11.23.0` it can also be an XML invoice file. Since version `11.24.0` the XML file can use the notations CII and UBL.

Since version `11.23.0` it is also possible to embed an XML invoice file in a PDF to create a ZUGFeRD PDF file. To do this, specify the XML invoice file in `INPUT_FILE` and use the `-pdfFile` or `-pdfaFile` switches to specify the PDF in which the XML file is to be embedded.

`OUTPUT_FILE` is a file path under which the created file is saved. Depending on the output format, this can be a PDF or XML file.

The optional `-outputType OUTPUT_TYPE` switch takes one additional argument specifying the output format. Possible types are listed below:

- `pdf` tells the generator to create a simple PDF file from the JSON data. The generated PDF file is not an electronic invoice. This is the default value if you do not specify the type.

- `xrechnung:cii` generates an XML file in CII format using the XRechnung profile.

- `xrechnung:ubl` generates an XML file in UBL format using the XRechnung profile.

- `en16931:cii` generates an XML file in CII format using the EN16931 profile.

- `en16931:ubl` generates an XML file in UBL format using the EN16931 profile.

- `peppol:ubl` generates an XML file in UBL format for the PEPPOL network.

- `zugferd:xrechnung` generates a hybrid electronic invoice that is actually a PDF file with the *xrechnung.xml* file attached to make it machine-readable.

- `zugferd:en16931` generates a hybrid electronic invoice that is actually a PDF file with the *factur-x.xml* file attached to make it machine-readable.

The optional `-pdfFile PDF_FILE` and `-pdfaFile PDFA_FILE` switches can be used in conjunction with a ZUGFeRD output format. If you do not use one of these arguments, then the generator produces a PDF/A file based on the data in the input file. If you specify `-pdfFile`, then the generator skips PDF generation and passes the specified PDF file to the PDF/A converter which converts the PDF file to PDF/A-3. If you specifiy a PDF/A file via the `-pdfaFile` switch, then the PDF generation and conversion steps are skipped and the generated XML invoice part is embedded into the specified PDF/A file to create a `zugferd` PDF file.

The optional `-passthrough` flag can be used if `INPUT_FILE` specifies a CII XML invoice file and the output type is set to one of the ZUGFeRD formats e.g. `-outputType zugferd:xrechnung`. In this case, the input file is embedded into the PDF file and not a newly generated XML file based on the input file. The `-passthrough` flag is not recommended for UBL XML files, as ZUGFeRD requires the CII format.

The `-langCode xx` option allows you to set the language for the PDF output. The PDF will then be generated in the selected language. Available since version 11.29.0.

- Version `11.29.0` supports `de`, `en`

The `-langFile LANG_FILE` option allows you to specific a file containing language keys and values ​​for PDF generation. Request a sample file from the PDF24 team that you can use and customize. Available since version 11.29.0.

The optional `-regenerateXml` flag can be used when specifying a PDF or PDF/A file and an XML data file on the command line. Without this option, the invoice generator simply embeds the specified XML data file into the specified PDF file. When `-regenerateXml` is used, the XML file is not simply embedded; it is first imported into the internal invoice format and then regenerated. Available since version 11.29.0.

### 9.2 Notes about the Internet Explorer 11 component used in prior versions

In prior version of the PDF24 Toolbox the Internet Explorer 11 component was used to display the GUI. For this to work, settings had to be set correctly:

- Javascript must be enabled
- The URL range pdf24://* must be allowed, because this is how the UI communicates with the installed toolbox.

If Javascript is not active, then you will usually see inactive file boxes and you will not be able to interact with the GUI.

If the URL range pdf24://* is not allowed, then the UI cannot communicate with the app and thus the app will not work as it should.

### 9.3 Notes about Windows Server and Citrix

If PDF24 Toolbox does not start or displays a blank screen, then there are 2 ways to fix the problem. The entry at CTXHook has the advantage that you don't need a restart:

*Possibility 1*:

```
[HKEY_LOCAL_MACHINE\System\CurrentControlSet\Services\CtxUvi]
UviProcessExcludes = „msedgewebview2“ [REG_SZ]
```

`UviProcessExcludes` entries can have a maximum of 14 characters. This works from Windows Server 2016 and requires a restart.

*Possibility 2*:

```
[HKEY_LOCAL_MACHINE\Software\Citrix\CTXhook]
ExkludedImageNames = „msedgewebview2.exe“ [REG_SZ]
```

This works from Windows Server 2008 and does not require a restart.

If the registry value already exists, simply append `msedgewebview2.exe` or `msedgewebview2` to the comma-separated list, e.g. `msedge.exe,msedgewebview2.exe`.

After restarting the affected system, the misbehavior should no longer occur. Often, it is sufficient to close the affected application completely.

## 10 pdf24-Ocr.exe

The pdf24-Ocr.exe is an app, that does optical character recognition on files. The app generates PDF files with text layer. Under the hood, the app uses [Tesseract](https://github.com/tesseract-ocr/tesseract) for text recognition. The result of tesseract is then combined with the actual file.

### 10.1 Command line

```
pdf24-Ocr.exe [OPTIONS] [FILES]
```

Invoking the application without arguments simply opens a GUI. Invoking the app with files, opens the GUI and loads the files specified on command line.

To apply OCR on a specific file and to save the resulting PDF file with a text layer, invoke the OCR tool like this:

```
pdf24-Ocr.exe -outputFile output.pdf [-language eng] [-dpi 300] [-applyProfile PROFILE] [-skipFilesWithText] [-skipPagesWithText] [-removeBackground] [-deskew] [-autoRotatePages] [-segmentationMode XXX] "input.pdf"
```

The `-outputFile` switch tells the app where to store the produced PDF file with recognized text.

The `-language` switch sets the language used by the OCR process. Multiple languages can be specified like `eng+deu`. Open the [list of available language codes](https://creator.pdf24.org/tesseract/4.0/traindata/list.txt) to see all language codes you can use.

The `-dpi` switch sets the DPI value used by the OCR process. In common, 300 is the recommended value.

The `-applyProfile` switch can be used to apply an output profile to the generated PDF file that contains the recognized text.

`-skipFilesWithText` tells the app to not process files that already contains text.

`-skipPagesWithText` tells the app to not process pages of a file that already contains text.

`-removeBackground` tells the app to detect and remove the background of the page.

`-deskew` tells the app to deskew the pages. This greatly improves the OCR result if the pages are slightly skewed.

`-autoRotatePages` tells the app to rotate the pages automatically based on the recognized text.

`-segmentationMode` specifies the segmentation mode used internally for text recognition. Supported values are `auto`, `textBlock`, `sparseText` or one of the numbers from the the `-psm` Tesseract values. Available since version 11.30.0.

In general, the app downloads language files on demand. Otherwise the installer would be very large and would consume a lot of disk space. If you prefer a local installation of all language files, the read the next chapter.

### 10.2 Local installation of all language file

To install language files locally and to stop downloading language files from the internet, do the following:

1. Download the [language files list for local installation](https://creator.pdf24.org/tesseract/4.0/traindata/local-list.txt) and put the file into the tesseract folder of the PDF24 installation directory. Rename the file to `trainDataList.txt`.

2. Then download the individual language files specified in the [language files list for download on demand](https://creator.pdf24.org/tesseract/4.0/traindata/list.txt) into the tessdata folder `INSTALL_DIR/tesseract/tessdata`.

You also have to download the `osd.traineddata` because this file is required for orientation detection. Without the file, the OCR process will fail with a data file error message.

Please make sure that you use the language files that are compatible with Tesseract 4.0. The language files can be downloaded from the tesseract project on GitHub.

Compared to the online list the local list does not contain URLs for download. Please note to rename the file name from `local-list.txt` to `trainDataList.txt`.

You can shorten the list if you like. In the list you can only specify the language files that should be displayed in the software.

## 11 pdf24-DocTool.exe

### 11.1 Command line

#### 11.1.1 General format and options

```
pdf24-DocTool.exe [options] [file1] [file2] ...
```

`[options]`

Options are used to tell the DocTool what to do and to set parameters. Below are general options that apply to most commands and are described here.

- `-expandDirs`

  If an input file is a directory then the DocTool replaces that input file with all the files inside that directory and processes all these files instead.

- `-expandDirsRecursive`

  Same as "-expandDirs" but also recurses down into subdirectories if there are subdirectories in the directory.

- `-includeFileExtensions extensions`

  Include input files by file extension. `extensions` is a comma seperated list of extensions like `.txt,.docx,.pptx`. This flag is often very helful when used in combination with the  `-expandDirs` or `-expandDirsRecursive` switches. Any input file that does not have one of the specified extensions will be filtered out. Available since version 11.8.0.

- `-excludeFileExtensions extensions`

  Exclude input files by file extension. `extensions` is a comma seperated list of extensions like `.txt,.docx,.pptx`. This flag is often very helful when used in combination with the  `-expandDirs` or `-expandDirsRecursive` switches. Any input file that has one of the specified extensions will be filtered out. Available since version 11.8.0.

- `-sort`

  Sorts all input files by name.

- `-deleteFiles`

  Delete input files after being processed. Be careful when using this flag.

- `-noProgress`

  Tells the DocTool not to use progress windows. Currently, not all commands supports this flag.

`-outputDir dir`

Optional flag to specifiy an output folder where the DocTool should save generated files. The files are saved under the name of the file inside the specified directory.

`-outputFile file`

Optional flag to specifiy an output file under which the DocTool should save the generated file(s). If more than one file is specified on the command line to be processed then the DocTool modifies the file name and adds a number.

The output file can be the special "-" one. In that case the DocTool saves the processed files into the same directory like the input files.

`[file1] [file2] ...`

  The DocTool is a file tool and you have to specify one or more files on the command line which are to be processed.

#### 11.1.2 Convert files to PDF and open PDF24 Assistant

```
pdf24-DocTool.exe file1 [file2] ...
```

Converts the files on the command line to PDF and opens an PDF24 assistant to handle the converted files.

`file1 [file2] ...`

One or more files to process.

#### 11.1.3 Web-optimize PDF files

```
pdf24-DocTool.exe -webOptimize [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Optimizes the files for web. Generates web optimized PDF files.

`-webOptimize`

The command to tell the DocTool to optimize the input files for web.

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.4 Apply a profile to input files

```
pdf24-DocTool.exe -applyProfile [-profile profileId] [-profileParam key value] [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Applies a profile on the specified files. A profile can be specified on command line or can be selected via a profile select dialog.

`-applyProfile`

The command to tell the DocTool to apply a profile on the input files

`[-profile profileId]`

Optional flag to specify an ID of a profile to use. The ID of default profiles is like "default/xxx" where xxx is the name of a default profile, e.g. "low", "medium", "good", "high" or "best". The ID of user profiles is like "user/yyy" where yyy is the name of a user profile. The ID of a profile specified in the HKLM area of the Windows registry (profiles visible to all users) is like "all/zzz" where zzz is the name of a profile.

`[-profileParam key value]`

You can override profile values using the `-profileParam` argument. The `[-profileParam key value]` switch can be used multiple times to override multiple values. This makes it possible to use a base profile and then overwrite certain parameters of this profile. Available since version 11.7.0.

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

#### 11.1.5 Join input files and create an output PDF file

```
pdf24-DocTool.exe -join [-sort] [-bookmarks bookmarksCmd] [-profile profileId] [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Joins input files to one output file.

`-join`

Tells the DocTool to join the input files.

`[-bookmarks bookmarksCmd]`

Sets a command for handling bookmarks. If `bookmarksCmd` is `keep`, then the join app tries to keep bookmarks from input files. If `bookmarksCmd` is `clear`, the function clears all bookmarks. If `bookmarksCmd` is `create`, then the function creates bookmarks based on the filenames. The default commmand is `keep`. Available since version 11.16.0.

`[-sort]`

Optional flag to sort the input files by name before joining.

`[-profile profileId]`

@see Documentation of "pdf24-DocTool.exe -applyProfile"

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.6 Open the extract pages UI

```
pdf24-DocTool.exe -extractPages file1 [file2] ...
```

Opens a page extract dialog for the input files to extract pages from the documents.

`-extractPages`

Tells the DocTool to open the page extract dialog for the input files

`file1 [file2] ...`

The file(s) from which to extract

#### 11.1.7 Split PDF files after each page

```
pdf24-DocTool.exe -splitByPage [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Splits the documents page by page

`-splitByPage`

Tells the DocTool to split the input files page by page.

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.8 Rotate pages of PDF files automatically

```
pdf24-DocTool.exe -autoRotatePages [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Rotates pages of input pdf files automatically based on page contents. Since version 10.7.2.

`-autoRotatePages`

Tells the DocTool to rotate pages

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.9 Convert from PDF

```
pdf24-DocTool.exe -convertTo [-outputDir dir] [-outputFile file] [-param key value] file1 [file2] ...
```

Converts the input files. Opens the Save As dialog where the user can select a file type and where the user can specify specific output file options.

`-convertTo`

Tells the DoctTool to convert the input files

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`[-param key value]`

The `-param` switch can be used to set parameters used by the converter. It can be used multiple times to set multiple params. If you do not use it and if you do not specifiy the output format on command line, then a dialog pops up where you can choose a format and corresponding parameters. Depending on the output format, there are sometimes a very large number of possible parameters. If you create your own output profile, it will be stored in the registry under the path `HKCU\Software\PDF24\Profiles\fo`. There you can see all possible keys depending on the format. If you only set the output format via `-param outputFormat xxx` (`xxx` could be pdf, jpg, png, tiff, ...), then default values ​​will be used for the output. The `-param` switch is available since version 11.29.0.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.10 Convert to PDF

```
pdf24-DocTool.exe -convertToPDF [-profile profileId] [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Converts the input files to PDF. The user can select a profile which is used to save the output file.

`-convertToPDF`

Tells the DoctTool to convert the input files to PDF

`[-profile profileId]`

@see Documentation of "pdf24-DocTool.exe -applyProfile"

`[-outputDir dir]`

See description of common parameters.

`[-outputFile file]`

See description of common parameters.

`file1 [file2] ...`

See description of common parameters.

#### 11.1.11 Upload a file via the HTTP protocol

```
pdf24-DocTool.exe -upload -url url [-header key value] file1 [file2] ...
```

Upload the input files to a web service, extracts the location header of the response and opens a browser window with the URL from the location header.

`-upload`

Tells the DocTool to upload the input files to a web service.

`[-header key value]`

The `-header` switch can be used to set headers of the request. It can be used multiple times to set multiple headers. The `-header` switch is available since version 11.29.0.

`-url url`

Specifies the URL of a web service to which to upload the input files.

`file1 [file2] ...`

The files to upload.

#### 11.1.12 Send files via E-Mail

```
pdf24-DocTool.exe -sendAsMail [-profile profileId] file1 [file2] ...
```

Opens the send email dialog and attaches the input files so that the user can send the files as an email.

`-sendAsMail`

Tells the DocTool to send the input files as an email.

`[-profile profileId]`

@see Documentation of "pdf24-DocTool.exe -applyProfile"

`file1 [file2] ...`

The files to send.

#### 11.1.13 Send files using PDF24 fax

```
pdf24-DocTool.exe -sendAsFax file1 [file2] ...
```

Sends the input files as a fax.

`-sendAsFax`

Tells th DocTool to send the input files as a fax.

`file1 [file2] ...`

The files to send.

#### 11.1.14 Execute the print command using ShellExecute

```
pdf24-DocTool.exe -shellPrint [-printerName nameOfPrinter] file1 [file2] ...
```

Prints the input files on a printer. Uses the files print command of the windows shell.

`-shellPrint`

Tells the DocTool to print the files with the windows shell print command.

`[-printerName nameOfPrinter]`

Optional flag to print on a specific printer.

`file1 [file2] ...`

The files to print.

#### 11.1.15 Extract files from the clipboard and creates a PDF of it

```
pdf24-DocTool.exe "<clipboard>"
```

Extract files from the windows clipboard and opens a PDF24 assistant to handle the files.

`<clipboard>`

Special file to tell the DocTool to import from windows clipboard.

#### 11.1.16 Capture files via TWAIN interface

```
pdf24-DocTool.exe "<twain>"
```

Imports files from the TWAIN interface (scanner or camery) and opens a PDF24 assistant to handle the files.

`<twain>`

Special file to tell the DocTool to import from TWAN interface

#### 11.1.17 Capture the screen

```
pdf24-DocTool.exe [-mode MODE] [-target TARGET] "<screen>"
```

Captures the screen. The capture mode and the target can be specified.

`[-mode MODE]`

Optional flag to set the capture mode. The mode can be one of the following:

- `screen` To capture the whole screen. This is the default.
- `screenClient` To capture the screen client area (excludes the windows taskbar)
- `activeWindow` To capture the active window
- `activeWindowClient` To capture the client area of the active window
- `userDefinedArea` To capture a user defined area
- `clipboard` To process a captured image copied to the windows clipboard

`[-target TARGET]`

Optional flag to specify the target of the capture image. The target can be one of the following options:

- `default` Opens a PDF24 assistant to handle the capture
- `clipboard` Copies the capture image into the clipboard
- `file` To store the image into a file

#### 11.1.18 Crop PDF files

```
pdf24-DocTool.exe -crop [-left value] [-top value] [-right value] [-bottom value] [-box value] [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Crops the pages of input PDF files. Available since version `11.6.0`.

`-crop`

The command to tell the DocTool to crop the pags of all input files.

`-left value`

The value for the left side of the media box. The value is a number and can have a siffix if either `mm`, `inch`, `pt`. If no suffix is specified, `mm` is used. Examples are `5mm`, `0.5inch`, `8pt`.

`-top value`

The value for the top side of the media box. See description of `-left` above for information about the value.

`-right value`

The value for the right side of the media box. See description of `-left` above for information about the value.

`-bottom value`

The value for the bottom side of the media box. See description of `-left` above for information about the value.

`-box value`

The PDF box to define. The value can be `cropBox` or `trimBox`. If no box is specified, `cropBox` is used.

`-outputDir dir`

See description of common parameters.

`-outputFile file`

See description of common parameters.

`file1 [file2] ...`

The files whose pages will be cropped.

#### 11.1.18 Compress PDF files

```
pdf24-DocTool.exe -compress [-useCompressionParamsDialog] [-dpi value] [-imageQuality value] [-colorModel value] [-outputDir dir] [-outputFile file] file1 [file2] ...
```

Compresses the files specified on command line and uses specified parameters for the compression function. Available since version `11.11.0`.

`-compress`

The command to tell the DocTool to compress input files.

`-dpi value`

The DPI (dotts per inch) compression value. Lower values reduce the output file size, but also the quality of embedded images. Default value is `144`.

`-imageQuality value`

The image quality value in `%` used to compress embedded images. Value range is `1 .. 100`. Lower values reduce the output file size, but also the quality of embedded images. Default value is `75`.

`-colorModel value`

The color model. Possible values are an empty string, `rgb`, `cmyk`, `gray`. The default value is an empty string which means not to change the color model.

`-useCompressionParamsDialog`

Tells the DocTool to show a dialog where the user can change compression params which are then used for the compression function.

`-outputDir dir`

See description of common parameters.

`-outputFile file`

See description of common parameters.

`file1 [file2] ...`

The files to compress.


## 12 pdf24-Reader.exe

The pdf24-Reader.exe is an application that can open and display PDF files. Internally PDFIUM is used as PDF library. PDF24 Reader is a fast and lightweight PDF reader that integrates well with Windows. A shell preview is available so that other applications like Outlook or Windows Explorer can preview PDF files.

### 12.1 Command line

```
pdf24-Reader.exe [OPTIONS] [FILE]
```

Invoking the application without arguments simply opens a GUI. Invoking the app with a file opens the GUI and loads the file specified on command line. There are switches and flags which can be used to control the behavior of PDF24 Reader. These are explained below:

The `/newWindow` switch tells the reader to open the specified PDF file in an seperate Window. Normally files are opened as tab in an existing instance.

The `/print` switch tells the reader to print the specified PDF file using the default printer in Windows.

The `/printTo XXX` option tells the reader to print the specified PDF file in the printer named `XXX`.

The `/printFlags XXX` option can be used to control the print function. `XXX` is a comma seperated list of flags. Currently the Reader supports `forceImagePrint`, `forceEmfPrint`, `grayscalePrint`. Supported since version `11.8.0`.

## 13 FAQ

### 13.1 The PDF printer is not working properly. Print jobs are stuck in the print queue. What to do?

Sometimes it can happen, that the PDF printer is not working well. Most of the time it can be fixed by checking the following:

- Ensure, that the PDF24 Windows service is running. This service is required in order to receive print jobs. The service is provided by the pdf24.exe and runs as `Local System` user. The service can be started via command line: `net start pdf24`.

- Ensure, that there is no bad print job which blocks the printer. Kill these jobs or clear the queue.

- Ensure, that the PDF printer is connected to the correct port. The default PDF printer is connected to the port `\\.\pipe\PDFPrint`. If this is not the case, then change it manually. You can see and change the port and in the printer properties of the printer.

  - Open the control panel of Windows
  - Open Printers
  - Right click the PDF24 printer
  - Cick printer properties
  - Click the ports tab
  - Check the printer port there

### 13.2 How to stop/remove the PDF24 autostart entry?

The PDF24 Autostart entry starts the user process that is used for the PDF printer to receive the print jobs from the PDF printer from the PDF24 Windows service and present them to the user.

In newer versions of the PDF24 Creator, it is possible to remove this autostart entry so that this process no longer starts with Windows. This is now possible because the PDF24 Windows Service tries to start this user process automatically if this process is not running. This makes it possible to start this process only when necessary.

To remove this autostart entry you have to change the Windows registry. Open the Registry Editor, open the path `HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Run` and delete the `PDF24` entry. This change prevents Windows from launching PDF24 on Windows startup.

### 13.3 How to update from version 9.x and keep settings?

In this case you would have to copy/rename the data in the registry, because there was a change in the past.

Versions below 10 used `HKLM/Software/PDFPrint` and `HKCU/Software/PDFPrint` to store settings in the registry. This has been changed to `HKLM/Software/PDF24` and `HKCU/Software/PDF24`.

If you want to keep your data, you have to export them before installing the new version. Then update the software. After that, import your exported into the new pathes. This means that you have to update the pathes in the exported file.

`HKLM/Software/PDFPrint` must be changed to `HKLM/Software/PDF24`.
`HKCU/Software/PDFPrint` must be changed to `HKCU/Software/PDF24`.

If you have a x64 system and if you now install a 64 bit version of PDF24, then you have to rename the following becaue of Wow6432Node redirection:
`HKLM/Software/Wow6432Node/PDFPrint` must be changed to `HKLM/Software/PDF24`