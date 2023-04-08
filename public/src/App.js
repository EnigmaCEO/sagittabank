import { createBrowserRouter, RouterProvider } from "react-router-dom";

import Balances from "./balances";

const router = createBrowserRouter([
  {
    path: "/balances",
    element: <Balances />,
  },
]);

function App() {
  return <RouterProvider router={router} />;
}

export default App;